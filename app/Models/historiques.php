<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class historiques extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cuve_id',
        'action',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function mout() {
        return $this->belongsTo(Mout::class);
    }
    public function cuve(){
    return $this->belongsTo(Cuve::class);
    }
}
