<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liga extends Model
{
    use HasFactory;
    public $fillable=['nama_liga','nagara'];
    public function klub()
    {
        return $this->hasMany(klub::class,'id_liga');
    }
}
