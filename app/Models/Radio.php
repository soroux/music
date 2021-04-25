<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function musics(){

        return $this->morphToMany(Music::class,'musicable');
    }

    public function getImageAttribute($value){
        return asset($value);
    }
}
