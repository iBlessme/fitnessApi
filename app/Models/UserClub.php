<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClub extends Model
{
    protected $table = 'user_clubs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name_user',
        'surname',
        'thirdname',
        'passport_number',
        'passport_serial',
        'snils',
        'phone_number',
        'login',
        'password',
        'birth_day'
    ];
    use HasFactory;
}
