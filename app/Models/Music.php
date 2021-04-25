<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function sliders(){

        return $this->morphbyMany(Music::class,'musicable');
    }
    public function playlists(){

        return $this->morphbyMany(Playlist::class,'musicable');
    }
    public function radios(){

        return $this->morphbyMany(Radio::class,'musicable');
    }
    public function podcast(){

        return $this->morphbyMany(Radio::class,'musicable');
    }


//    public function getMusicAttribute($value){
//
//        return asset($value);
//    }

}
