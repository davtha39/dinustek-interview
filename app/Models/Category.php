<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $fillable = ['name'];
    public $timestamps = true;

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
