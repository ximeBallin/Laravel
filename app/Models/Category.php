<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category model extends Model // o class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    // Indicamos que el binding en las rutas se haga mediante el 'slug'
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
