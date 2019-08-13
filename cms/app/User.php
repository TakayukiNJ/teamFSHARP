<?php

namespace App;
use Illuminate\Auth\MustVerifyEmail;  //追加１
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;

// class User extends Authenticatable { の箇所を以下に変更2
class User extends Authenticatable implements MustVerifyEmailContract {  //変更2
    use MustVerifyEmail, Notifiable;  //MustVerifyEmailを追加
//{
//    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function messages()
    {
      return $this->hasMany(Message::class);
    }
}
