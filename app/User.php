<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     *  The database table used by the modal
     *
     * @var string
     */
    protected $table = 'users';

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

    public function createUser($data) {
        $user = new User();
        $user->user_name = $data['user_name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->fullname = isset($data['fullname'])?$data['fullname']:null;
        $user->phone = isset($data['phone'])?$data['phone']:null;
        $user->address = isset($data['address'])?$data['address']:null;
        $user->save();

        return $user;
    }
}
