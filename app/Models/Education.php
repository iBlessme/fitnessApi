<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Education extends Model
{
    use HasFactory;
    protected $table = "educations";
    public function worker(): HasMany{
    return $this->hasMany(Worker::class);
}
}
