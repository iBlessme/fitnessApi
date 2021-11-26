<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricator extends Model
{
    protected $table = 'fabricators';
    protected $primaryKey = 'id_fabricator';
    protected $fillable = [
        'name_fabricator',
        'cost_country'
    ];
    use HasFactory;
}
