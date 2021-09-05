<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use App\Notifications\CustomVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Passwords\CanResetPassword as crp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
// CanResetPassword
{
    use HasFactory;
    use Notifiable;
    // use crp;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * sendEmailVerificationNotification overrides the default one that laravel 
     * uses to handle sendEmailVerificationNotification in our app. we'll come 
     * back to this later
     *
     * @return void
     */
    // public function sendEmailVerificationNotification(){
    //     return $this->notify(new CustomVerifyEmail);
    // }    
    /**
     * setPasswordAttribute
     * i just use this one to save accessors and mutators implementation
     * @param mixed $password
     *
     * @return void
     */
    // public function setPasswordAttribute($password)
    // {
    //     // $this->attributes['password'] = Hash::make($password);
    // }
}
