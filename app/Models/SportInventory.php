<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SportInventory extends Model
{
    protected $table = 'sport_inventories';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'types_of_inventories_id',
        'halls_id',
        'fabricators_id'
    ];
    use HasFactory;
    public function typesOfInventorie(): BelongsTo{
        return $this->belongsTo(TypesOfInventory::class, 'types_of_inventories_id');
    }
    public function hall(): BelongsTo{
        return $this->belongsTo(Hall::class, 'halls_id');
    }
    public function fabricator(): BelongsTo{
        return $this->belongsTo(Fabricator::class, 'fabricators_id');
    }
}
