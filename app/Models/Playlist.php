<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function musics(){

        return $this->morphToMany(Music::class,'musicable');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getImageAttribute($value){
        return asset($value);
    }
}
