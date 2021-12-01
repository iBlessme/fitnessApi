<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Abonement extends Model
{
    protected $table = 'abonements';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name_abonement',
        'cost_abonement',
        'date_start',
        'date_finish',
        'bonus_programms_id'
    ];
    use HasFactory;

//    public function clients(){
//        return $this->hasMany(Client::class);
//    }

    public function bonus(): BelongsTo{
        return $this -> belongsTo(BonusProgramm::class, 'bonus_programms_id');
    }

}

