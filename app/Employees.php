<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable=['fname','lname','address','phone_no'];
}
