<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // relación polimorfica uno a uno (Inversa)
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
