<?php

namespace App;

use Carbon\Carbon;
use DateTimeInterface;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable // implements MustVerifyEmail
{
    use SoftDeletes, Notifiable, HasApiTokens;

    const IS_ADMIN = 1;
    const IS_MEMBER = 2;
    const IS_MANAGER = 3;
    const IS_INSTRUCTOR = 4;
    const IS_MECHANIC = 5;
    const LANG_SELECT = [
        'en' => 'English',
      //  'DE' => 'German',
        'it' => 'Italiano',
    ];
    public $table = 'users';
	
    protected $hidden = [
        'password',
        'remember_token',
		'surname_name'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'medical_due',
        'email_verified_at',
        'privacy_confirmed_at',
		'birthdate',
		'associate_due',
		'advanced_due',
    ];

    protected $fillable = [
        'name',
		'surname',
        'email',
        'password',
        'lang',
        'taxno',
        'phone_1',
        'phone_2',
        'address',
        'city',
        'factor_id',
        'license',
        'medical_due',
        'params',
        'remember_token',
        'email_verified_at',
        'privacy_confirmed_at',
        'created_at',
        'updated_at',
        'deleted_at',
		'notes',
		'prov',
		'zipcode',
		'birthdate',
		'birthplace',
		'phone_3',
		'fax',
		'associate_due',
		'pec',
		'advanced_due',
		'assoc_type',
    ];

    public function roles()
    {
		$user_roles = $this->belongsToMany(Role::class);
		
		/*if($user_roles->where('id', 1)->exists() || $user_roles->where('id', 4)->exists())
			return $user_roles;
		
		if(strtotime($this->associate_due) <= strtotime(Carbon::now()))
			return $this->belongsToMany(Role::class)->where('role_id', '-999'); //set impossibile condition to return empty relationship*/
		
        return $user_roles;
    }
	
	public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }
	
	public function getIsMemberAttribute()
    {
        return $this->roles()->where('id', 2)->exists();
    }

    public function getIsManagerAttribute()
    {
        return $this->roles()->where('id', 3)->exists();
    }

    public function getIsInstructorAttribute()
    {
        return $this->roles()->where('id', 4)->exists();
    }

    public function getIsMechanicAttribute()
    {
        return $this->roles()->where('id', 5)->exists();
    }
	
	public function getIsValidAssociateAttribute()
    {
		if($this->roles()->where('id', 1)->exists() || $this->roles()->where('id', 3)->exists() || $this->roles()->where('id', 4)->exists())
			return 1;
		
		if($this->assoc_type == 'Fondatore' || $this->assoc_type == 'Benemerito')
			return 1;

		if(Carbon::now()->gt(Carbon::createFromFormat('d/m/Y', $this->associate_due)))
			return 0;
		else
			return 1;
    }

    public function userActivities()
    {
        return $this->hasMany(Activity::class, 'user_id', 'id');
    }

    public function userBookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_user');
    }

    public function instructorBookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_instructor');
    }

    public function copilotActivities()
    {
        return $this->hasMany(Activity::class, 'copilot_id', 'id');
    }

    public function instructorActivities()
    {
        return $this->hasMany(Activity::class, 'instructor_id', 'id');
    }

    public function userIncomes()
    {
        return $this->hasMany(Income::class, 'user_id', 'id');
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function factor()
    {
        return $this->belongsTo(Factor::class, 'factor_id');
    }

    public function getMedicalDueAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setMedicalDueAttribute($value)
    {
        $this->attributes['medical_due'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
	
	public function getBirthdateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBirthdateAttribute($value)
    {
        $this->attributes['birthdate'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
	
	public function getAssociateDueAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setAssociateDueAttribute($value)
    {
        $this->attributes['associate_due'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
	
	public function getAdvancedDueAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setAdvancedDueAttribute($value)
    {
        $this->attributes['advanced_due'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setTaxnoAttribute($value)
    {
        $this->attributes['taxno'] = strtoupper($value);
    }

    public function planes()
    {
        return $this->belongsToMany(Plane::class);
    }

    public function userUserAlerts()
    {
        return $this->belongsToMany(UserAlert::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
