<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class cuverie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
    ];
    public function cuves(): HasMany{
        return $this->hasMany(Cuve::class);
    }
}
