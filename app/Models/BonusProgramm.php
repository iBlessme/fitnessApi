<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonusProgramm extends Model
{
    use HasFactory;
    public function abonement()
    {
        return $this->hasMany(Abonement::class);
    }

}
