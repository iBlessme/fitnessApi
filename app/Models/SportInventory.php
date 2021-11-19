<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SportInventory extends Model
{
    use HasFactory;
    public function types_of_inventorie(): HasMany{
        return $this->hasMany(TypesOfInventory::class);
    }
    public function hall(): HasMany{
        return $this->hasMany(Hall::class);
    }
    public function fabricator(): HasMany{
        return $this->hasMany(Fabricator::class);
    }
}
