<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reseption extends Model
{
    use HasFactory;
    public function sport_inventorie(): HasMany{
        return $this->hasMany(SportInventory::class);
    }
    public function worker(): HasMany{
        return $this->hasMany(Worker::class);
    }
    public function client(): HasMany{
        return $this->hasMany(Client::class);
    }
}
