<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\CurrentUserTrait;

class Activity extends Model
{
    use SoftDeletes, CurrentUserTrait;
	
    public $table = 'activities';

    const SPLIT_COST_RADIO = [
        '0' => 'No suddivisione',
        '1' => '50-50',
    ];
	
	const PAID_RADIO = [
        '0' => 'No',
        '1' => 'Si',
    ];

    protected $dates = [
        'event',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'type_id',
        'split_cost',
        'copilot_id',
        'instructor_id',
        'plane_id',
        'event',
        'engine_warmup',
        'warmup_start',
        'counter_start',
        'counter_stop',
        'departure',
        'arrival',
        'event_start',
        'event_stop',
        'warmup_minutes',
        'rate',
        'minutes',
        'amount',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
		'paid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function copilot()
    {
        return $this->belongsTo(User::class, 'copilot_id');
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function plane()
    {
        return $this->belongsTo(Plane::class, 'plane_id');
    }

    public function getEventAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEventAttribute($value)
    {
        $this->attributes['event'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
