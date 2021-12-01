<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricator extends Model
{
    protected $table = 'fabricators';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name_fabricator',
        'country'
    ];
    use HasFactory;
}
