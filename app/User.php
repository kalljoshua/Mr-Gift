<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guard = 'user';
    protected $fillable = array('token');

      public function products()
      {
          return $this->hasMany('App\Product');
      }

    public function company()
    {
        return $this->hasMany('App\Company','user_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','user_id');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function user_whishlists(){
      return $this->belongsToMany('App\Product','whishlists');
  }

  public function user_archived(){
      return $this->belongsToMany('App\Company','archiveds');
  }

  public function user_package(){
      return $this->belongsToMany('App\Package','package_subscriptions');
  }


  public function verified()
  {
      return $this->token===null;
  }

  public function sendVerificationEmail()
  {
      $this->notify(new VerifyEmail($this));
  }

}
