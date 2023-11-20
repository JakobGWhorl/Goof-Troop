<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'first_name',
        'last_name',
        'role',
        'email',
        'phone',
        'password',
        'dob',
        'salary'
    ];
}
