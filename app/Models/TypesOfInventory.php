<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypesOfInventory extends Model
{
    protected $table = 'types_of_inventories';
    protected $primaryKey = 'id_types_of_inventory';
    protected $fillable = [
        'name_inventory'
    ];
    use HasFactory;
}
