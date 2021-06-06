<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    
    use HasFactory;

    // Relación muchos a muchos polimorfica (inversa)
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
