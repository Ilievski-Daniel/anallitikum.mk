<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table="posts";
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'cover_image',
    ];
    public function category()
    {
        return $this->belongsto('App\Models\Category', 'category_id');
    }

}
