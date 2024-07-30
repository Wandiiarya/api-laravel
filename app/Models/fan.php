<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fan extends Model
{
    use HasFactory;
    protected $fillable =['nama_fan'];
    public function klub()
    {
        return $this->BelongsToMany(klub::class,'fan_klub','id_fan','id_klub');
    }
}
