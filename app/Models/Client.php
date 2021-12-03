<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'abonements_id',
        'user_clubs_id'
    ];
    public function abonement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Abonement::class, 'abonements_id');
    }
    public function userClub(): BelongsTo
    {
        return $this->belongsTo(UserClub::class, 'user_clubs_id');
    }
}
