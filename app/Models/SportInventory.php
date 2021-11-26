<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SportInventory extends Model
{
    protected $table = 'sport_inventories';
    protected $primaryKey = 'id';
    protected $fillable = [
    ];
    use HasFactory;
    public function typesOfInventorie(): HasMany{
        return $this->hasMany(TypesOfInventory::class);
    }
    public function hall(): HasMany{
        return $this->hasMany(Hall::class);
    }
    public function fabricator(): HasMany{
        return $this->hasMany(Fabricator::class);
    }
}
