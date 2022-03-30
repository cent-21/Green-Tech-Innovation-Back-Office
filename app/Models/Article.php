<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['postTitle', 'postSlug', 'postImage', 'postDescription'];
}
