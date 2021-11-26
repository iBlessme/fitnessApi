<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends Model
{
    protected $table = 'workers';
    protected $primaryKey = 'id_worker';
    protected $fillable = [
        'salary'
    ];
    use HasFactory;
    public function positionWork(): HasMany{
        return $this->hasMany(PositionWork::class);
    }
    public function userClub(): HasMany{
        return $this->hasMany(UserClub::class);
    }
}
