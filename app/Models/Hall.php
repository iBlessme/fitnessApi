<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hall extends Model
{
    protected $table = 'halls';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name_hall',
        'capacity'
    ];
    public function typesOfTraning(): HasMany{
        return $this->hasMany(TypesOfTraning::class);
    }
    use HasFactory;
}
