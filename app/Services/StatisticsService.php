<?php

namespace App\Services;

use App\Activity;
use App\Income;
use App\Expense;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsService
{
    public function getActivities(Request $request)
    {
        $activities = Activity::with(['user', 'type', 'plane'])
            ->whereBetween('event', [$request->session()->get('fromDate'), $request->session()->get('toDate')])
            ->when(auth()->user()->roles->contains(1) !=true, function ($query) {
                return $query->where('user_id', auth()->id());
            });

        return $activities;
    }


    public function getDepositIncomes(Request $request)
    {
        $incomes = Income::whereHas('income_category', function ($q) {
            $q->where('deposit', '=', 1);
        })
            ->whereBetween('entry_date', [$request->session()->get('fromDate'), $request->session()->get('toDate')])
            ->when(auth()->user()->roles->contains(1) !=true, function ($query) {
                return $query->where('user_id', auth()->id());
            });

        return $incomes;
    }


    public function getAllIncomes(Request $request)
    {
        $incomes = Income::with('income_category')
            ->whereBetween('entry_date', [$request->session()->get('fromDate'), $request->session()->get('toDate')]);

        return $incomes;
    }


    public function getExpenses(Request $request)
    {
        $expenses = Expense::with('expense_category')
            ->whereBetween('entry_date', [$request->session()->get('fromDate'), $request->session()->get('toDate')])
            ->when(auth()->user()->roles->contains(1) !=true, function ($query) {
                return $query->where('user_id', auth()->id());
            });

        return $expenses;
    }

    /**
     * Dashboard method
     * Used in HomeController
     */
    public function dashboard(Request $request)
    {
        // Call the function
        $activity_lines = $this->getActivities($request);

        $activityAmountTotal = $activity_lines->sum('amount');
        $activityMinutesTotal = $activity_lines->sum('minutes');
        $activityHoursAndMinutes = intval($activityMinutesTotal / 60) . 'h : ' . $activityMinutesTotal%60 . 'm';
        
        // Call the function
        $income_lines = $this->getDepositIncomes($request);

        $incomeAmountTotal = $income_lines->sum('amount');

        $granTotal = $incomeAmountTotal + -abs($activityAmountTotal);

        return compact('granTotal', 'incomeAmountTotal', 'activityAmountTotal', 'activityHoursAndMinutes');
    }

    /**
     * Activity Report method
     * Used in ActivityReportController
     */
    public function getActivityReport(Request $request)
    {
        // Call the function
        $activities = $this->getActivities($request);

        $activityTotalMinutes = $activities->sum('minutes');
        $activityTotalTime = intval($activityTotalMinutes / 60) .':'. $activityTotalMinutes%60;

        /* Activity by member */
        $groupedUserActivities = $activities->whereNotNull('user_id')->orderBy('minutes', 'desc')->get()->groupBy('user_id');
        $activitiesUserSummary = [];

        foreach ($groupedUserActivities as $act) {
            foreach ($act as $line) {
                if (!isset($activitiesUserSummary[$line->user->name])) {
                    $activitiesUserSummary[$line->user->name] = [
                        'name'   => $line->user->name,
                        'minutes' => 0
                    ];
                }

                $activitiesUserSummary[$line->user->name]['minutes'] += $line->minutes;
            }
        }

        /* Activity by type */
        $groupedTypeActivities = $activities->whereNotNull('type_id')->orderBy('minutes', 'desc')->get()->groupBy('type_id');
        $activitiesTypeSummary = [];

        foreach ($groupedTypeActivities as $act) {
            foreach ($act as $line) {
                if (!isset($activitiesTypeSummary[$line->type->name])) {
                    $activitiesTypeSummary[$line->type->name] = [
                        'name'   => $line->type->name,
                        'minutes' => 0,
                    ];
                }

                $activitiesTypeSummary[$line->type->name]['minutes'] += $line->minutes;
            }
        }

        /* Activity by plane */
        $groupedPlaneActivities = $activities->whereNotNull('plane_id')->orderBy('minutes', 'desc')->get()->groupBy('plane_id');
        $activitiesPlaneSummary = [];

        foreach ($groupedPlaneActivities as $act) {
            foreach ($act as $line) {
                if (!isset($activitiesPlaneSummary[$line->plane->callsign])) {
                    $activitiesPlaneSummary[$line->plane->callsign] = [
                        'callsign'   => $line->plane->callsign,
                        'minutes' => 0,
                    ];
                }

                $activitiesPlaneSummary[$line->plane->callsign]['minutes'] += $line->minutes;
            }
        }

        return [
            'activitiesUserSummary'   =>   $activitiesUserSummary,
            'activitiesTypeSummary'   =>   $activitiesTypeSummary,
            'activitiesPlaneSummary'  =>   $activitiesPlaneSummary,
            'activityTotalMinutes'    =>   $activityTotalMinutes,
            'activityTotalTime'       =>   $activityTotalTime
        ];
    }


    /**
    * Expense Report method
    * Used in ExpenseReportController
    */
    public function getExpenseReport(Request $request)
    {
        // Call the functions
        $expenses = $this->getExpenses($request);
        $incomes = $this->getAllIncomes($request);

        $expensesTotal   = $expenses->sum('amount');
        $incomesTotal    = $incomes->sum('amount');
        $groupedExpenses = $expenses->whereNotNull('expense_category_id')->orderBy('amount', 'desc')->get()->groupBy('expense_category_id');
        $groupedIncomes  = $incomes->whereNotNull('income_category_id')->orderBy('amount', 'desc')->get()->groupBy('income_category_id');
        $profit          = $incomesTotal - $expensesTotal;

        $expensesSummary = [];

        foreach ($groupedExpenses as $exp) {
            foreach ($exp as $line) {
                if (!isset($expensesSummary[$line->expense_category->name])) {
                    $expensesSummary[$line->expense_category->name] = [
                    'name'   => $line->expense_category->name,
                    'amount' => 0,
                ];
                }

                $expensesSummary[$line->expense_category->name]['amount'] += $line->amount;
            }
        }

        $incomesSummary = [];

        foreach ($groupedIncomes as $inc) {
            foreach ($inc as $line) {
                if (!isset($incomesSummary[$line->income_category->name])) {
                    $incomesSummary[$line->income_category->name] = [
                    'name'   => $line->income_category->name,
                    'amount' => 0,
                ];
                }

                $incomesSummary[$line->income_category->name]['amount'] += $line->amount;
            }
        }

        /* Overdue payment members */
        $overdueMembers = DB::select(DB::raw("
        SELECT
            u.id,
            u.name,
            COALESCE(suminc, 0) AS suminc,
            COALESCE(sumact, 0) AS sumact,
            COALESCE(suminc, 0) - COALESCE(sumact, 0) AS total
        FROM
            users u
                LEFT JOIN
            (SELECT
                user_id, SUM(amount) AS sumact
            FROM
                activities a
            WHERE
                a.event BETWEEN (:activityfrom) AND (:activityto) AND a.deleted_at is null
            GROUP BY a.user_id) a ON u.id = a.user_id
                LEFT JOIN
            (SELECT
                user_id, SUM(amount) AS suminc
            FROM
                incomes i
            INNER JOIN income_categories ic ON i.income_category_id = ic.id
            WHERE
                i.entry_date BETWEEN (:incomefrom) AND (:incometo)
                    AND ic.deposit = 1 AND ic.deleted_at is null
            GROUP BY i.user_id) i ON u.id = i.user_id
        ORDER BY total ASC
        "), array(
            'activityfrom' => $request->session()->get('fromDate'),
            'activityto'   => $request->session()->get('toDate'),
            'incomefrom'   => $request->session()->get('fromDate'),
            'incometo'     => $request->session()->get('toDate')
        ));

        return [
            'expensesSummary' => $expensesSummary,
            'incomesSummary' => $incomesSummary,
            'expensesTotal' => $expensesTotal,
            'incomesTotal' => $incomesTotal,
            'profit' => $profit,
            'overdueMembers' => $overdueMembers
        ];
    }
}