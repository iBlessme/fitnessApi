<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypesOfTraning extends Model
{
    protected $table = 'types_of_tranings';
    protected $primaryKey = 'id_types_of_traning';
    protected $fillable = [
        'name_traning'
    ];
    use HasFactory;
}
