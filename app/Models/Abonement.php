<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\BonusProgramm;

class Abonement extends Model
{
    use HasFactory;
    public function bonus(){
        return $this->hasMany(BonusProgramm::class);
    }

}

