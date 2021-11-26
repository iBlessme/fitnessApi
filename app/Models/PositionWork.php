<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionWork extends Model
{
    protected $table = 'position_works';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name_position'
    ];
    use HasFactory;
}
