<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorry;

class Post extends Model
{
    use HasFactory;

    public function categories() {
        return $this->belongsToMany(Categorry::class);
    }
}
