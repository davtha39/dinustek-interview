<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = [
        'title', 'content'
    ];
    public $timestamps = true;

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
