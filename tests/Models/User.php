<?php

namespace prdp543\PasswordNotification\tests\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use prdp543\PasswordNotification\Contracts\PassworChangedNotificationContract; // <------------------------------- this one
use prdp543\PasswordNotification\Traits\PassworChangedNotificationTrait;// <---------------------- and this one
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements PassworChangedNotificationContract
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use PassworChangedNotificationTrait;
    use CrudTrait; // <----- this
    use HasRoles; // <------ and this
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
}
