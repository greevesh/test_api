<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // prevents SQLSTATE[42S22] 'Column not found' error
    public $timestamps = false;
}