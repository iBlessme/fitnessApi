<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends Model
{
    use HasFactory;
    public function position_work(): HasMany{
        return $this->hasMany(PositionWork::class);
    }
    public function user_club(): HasMany{
        return $this->hasMany(UserClub::class);
    }
}
