<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hall extends Model
{
    protected $table = 'halls';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name_hall',
        'capacity',
        'types_of_tranings_id'
    ];
    public function typesOfTraning(): BelongsTo{
        return $this-> belongsTo(TypesOfTraning::class, 'types_of_tranings_id');
    }
    use HasFactory;
}
