<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reseption extends Model
{
    protected $table = 'reseptions';
    protected $primaryKey = 'id_reseption';
    protected $fillable = [

    ];
    use HasFactory;
    public function sportInventorie(): HasMany{
        return $this->hasMany(SportInventory::class);
    }
    public function worker(): HasMany{
        return $this->hasMany(Worker::class);
    }
    public function client(): HasMany{
        return $this->hasMany(Client::class);
    }
}
