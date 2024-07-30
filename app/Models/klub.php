<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klub extends Model
{
    use HasFactory;
    protected $fillable=['nama_klub','logo','id_liga'];
    public function liga()
    {
        return $this->belongsTo(klub::class,'id_liga');
    }
    public function pemain()
    {
        return $this->hasMany(pemain::class,'id_klub');
    }
    public function fan()
    {
        return $this->BelongsToMany(Fan::class,'fan_klub','id_klub','id_fan');
    }
}
