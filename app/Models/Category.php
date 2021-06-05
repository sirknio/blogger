<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    use HasFactory;
    
    // Relación uno a muchos
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
