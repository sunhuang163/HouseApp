<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table="departments";
    public $timestamps =false;
    public $fillable=['name','code'];
    
}
