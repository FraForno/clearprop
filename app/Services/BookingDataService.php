<?php

namespace App\Services;

use App\Booking;
use Carbon\Carbon;

class BookingDataService
{
    public function getBookingDataForCalendar()
    {
        $collectionBookingEvents = [];

		$bookingDates = Booking::with(['plane', 'bookingUsers', 'bookingInstructors', 'slot', 'mode'])
				->orderBy('reservation_start', 'asc')
				->get();
		if( (auth()->user()->IsStudent) || 
			(auth()->user()->IsMember)){
				$bookingDates = $bookingDates->filter(function ($bookingDate) { 
						foreach($bookingDate->bookingUsers as $curr_user)
						{
							if($curr_user->id == auth()->user()->id)
								return true;
						}
						return false;
				});
			
		}

        foreach ($bookingDates as $bookingDateItem) {
            switch ($bookingDateItem->mode_id) {
                case('1'):
                    $borderColor = "#007bff";
                    $backgroundColor = "#007bff";
                    break;
                case('2'):
                    $borderColor = "#6c757d";
                    $backgroundColor = "#6c757d";
                    break;
                case('4'):
                    $borderColor = "#dc3545";
                    $backgroundColor = "#dc3545";
                    break;
                default:
                    $borderColor = "#007bff";
                    $backgroundColor = "#007bff";
            }

            $collectionBookingEvents[] = [
                //'title' => $bookingDateItem->plane->callsign,
				'title' => count($bookingDateItem->bookingUsers) == 1 ? $bookingDateItem->bookingUsers[0]->surname : 'Lezione',
                'start' => Carbon::createFromFormat('d/m/Y H:i', $bookingDateItem->reservation_start)->format('Y-m-d H:i'),
                'end' => Carbon::createFromFormat('d/m/Y H:i', $bookingDateItem->reservation_stop)->format('Y-m-d H:i'),
                'backgroundColor' => $backgroundColor,
                'borderColor' => $borderColor,
                'description' => $bookingDateItem->description,
            ];
        }
		
		//debug(json_encode($collectionBookingEvents));
        return json_encode($collectionBookingEvents);
    }

    public
    function getBookingDataForCards()
    {
        $bookingDates = Booking::with(['plane', 'bookingUsers', 'bookingInstructors', 'slot', 'mode'])
            ->where('reservation_stop', '>=', Carbon::parse(today()))
            ->orderBy('reservation_start', 'asc')
            ->get();
			
		if( (auth()->user()->IsStudent) || 
			(auth()->user()->IsMember)){
			$bookingDates = $bookingDates->filter(function ($bookingDate) { 
					foreach($bookingDate->bookingUsers as $curr_user)
					{
						if($curr_user->id == auth()->user()->id)
							return true;
					}
					return false;
			});
		}
			
		return $bookingDates->groupBy(function ($booking) {
                return Carbon::createFromFormat('d/m/Y H:i', $booking->reservation_start)->isoFormat('ddd DD MMM');
            });
    }
}
