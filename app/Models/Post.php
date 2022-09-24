<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // relacion de uno a muchos (inversa) a usuarios
    public function user(){
        /* return $this->belongsTo('App\Models\User'); */
        return $this->belongsTo(User::class);
    }

    // relacion de uno a muchos ( inversa) a categoria
    public function category(){
       /*  return $this->belongsTo('App\Models\Category'); */
        return $this->belongsTo(Category::class);
    }

    // relacion de muchos a muchos con tags
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
