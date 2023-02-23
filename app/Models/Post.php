<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Si hubisesemos puesto otro nombre que no sea Post tendriamos que 
    //relacionarla de esta manera   protected $table="posts";
}
