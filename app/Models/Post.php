<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title' ,
    'slug' ,
    'likes' ,
    'content'
    ];

    //change the datatype of likes from str to int
    protected $cast =[
        'likes'=>'integer'
    ];
}
