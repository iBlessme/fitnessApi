<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends Model
{
    protected $table = 'workers';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'salary',
        'position_works_id',
        'user_clubs_id',

    ];
    use HasFactory;
    public function positionWork(): BelongsTo{
        return $this->belongsTo(PositionWork::class, 'position_works_id');
    }
    public function userClub(): BelongsTo{
        return $this->belongsTo(UserClub::class, 'user_clubs_id');
    }
}
