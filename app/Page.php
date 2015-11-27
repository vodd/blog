<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $fillable = ['title','content','images'];    
}
