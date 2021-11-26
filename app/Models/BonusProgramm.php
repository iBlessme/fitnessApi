<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonusProgramm extends Model
{
    protected $table = 'bonus_programms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name_programm',
        'cost'
    ];
    use HasFactory;


}
