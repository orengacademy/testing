<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'gender',
        'password',
        'role',
        'residentstatus',
        'typeofresident',
        'nationality',
        'maritalstatus',
        'personalemail',
        'streetaddress',
        'mobilephone',
        'emergencycontactname',
        'emergencycontactno',
        'joindate',
        'position',
        'ic',
        'dob',
        'race',
        'disabilitystatus',
        'children',
        'state',
        'postcode',
        'city',
        'paymentmethod',
        'bankname',
        'bankaccount',
        'earningfreq',
        'location',
        'epf',
        'ssfwnumber',
        'socsocategory',
        'pcbnumber',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
