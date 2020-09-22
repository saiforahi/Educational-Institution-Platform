<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Subscriber;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName', 'email', 'password','phone','username', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_details()
    {
        return $this->hasOne('App\UserDetails','user_id','id');
    }
    public function admin(){
        return $this->hasOne('App\Admin','user_id','id');
    }
    public function isSubscribed($id){
        if(Subscriber::where('institute_id',$id)->where('user_id',$this->id)->exists()){
            return 'unsubscribe';
        }
        return 'subscribe';
    }
}
