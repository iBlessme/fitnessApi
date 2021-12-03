<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserClub extends Model
{
    use HasApiTokens,Notifiable;
    protected $table = 'user_clubs';
    protected $primaryKey = 'id';
    public $timestamps = false;
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
