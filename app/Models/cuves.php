<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class cuves extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'volume_max',
        'cuverie_id',
    ];
    public function cuverie(): BelongsTo
    {
        return $this->belongsTo(Cuverie::class);
    }
    public function mouts() {
        return $this->hasMany(Mout::class);
    }
    public function historiques()
    {
    return $this->hasMany(Historique::class);
    }
}
