<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{
    //
    protected $table="employee_statuses";
    public $timestamps =false;
    public $fillable=['name','code'];
}
