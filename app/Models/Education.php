<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Education extends Model
{

    protected $table = 'education';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'quailifaction' ,
        'stage',
        'registration_number',
        'serial_number',
        'institution',
        'date_ofissue',
        'workers_id'
    ];

    public function worker(): BelongsTo
    {
        return $this->BelongsTo(Worker::class, 'workers_id');
    }
    use HasFactory;
}
