<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(user::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }

    //Relacion muchos a muchos
    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
