<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reseption extends Model
{
    protected $table = 'reseptions';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'sport_inventories_id',
        'workers_id',
        'clients_id'
    ];

    use HasFactory;
    public function sportInventorie(): BelongsTo{
        return $this->belongsTo(SportInventory::class, 'sport_inventories_id');
    }
    public function worker(): BelongsTo{
        return $this->belongsTo(Worker::class, 'workers_id');
    }
    public function client(): BelongsTo{
        return $this->belongsTo(Client::class, 'clients_id');
    }
}
