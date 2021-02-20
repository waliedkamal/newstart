<?php

namespace App;

use app\models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['titles', 'content'];
}
