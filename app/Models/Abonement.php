<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonement extends Model
{
    protected $table = 'abonements';
    protected $fillable = [
        'name_abonement',
        'cost_abonement',
        'date_start',
        'date_finish'
    ];
    use HasFactory;

    public function bonus(){
        return $this -> hasMany(BonusProgramm::class);
    }

}

