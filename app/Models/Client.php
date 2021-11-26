<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";
    protected $primaryKey = 'id_client';
    public function abonement(): HasMany{
        return $this->hasMany(Abonement::class);
    }
    public function user_club(): HasMany{
        return $this->hasMany(UserClub::class);
    }
}
