<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mouts extends Model
{
    use HasFactory;

    protected $fillable = [
        'volume',
        'origine',   
        'type',              
        'id_cuve',
        'id_vignoble',
    ];

    public function cuve(): BelongsTo {
        return $this->belongsTo(Cuve::class, 'id_cuve');
    }
    public function vignoble()
    {
        return $this->belongsTo(Vignoble::class, 'id_vignoble');
    }
}
