<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\UserRequest as UserRequest;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
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
     * One to Many Relationship User & Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books() 
    {
        return $this->hasMany('App\Models\Book');
    }

    public function createUser(UserRequest $request) 
    {
        $this->email = $request->email;
        $this->hash = $request->password;
        $this->salt = $request->password;
        // criar hash e salt

        $this->save();
    }

    public function updateUser(UserRequest $request)
    {
        if ($request->email) {
            $this->email = $request->email;
        }

        if ($request->password) {
            // criar hash e salt
        }

        $this->save();
    }
}