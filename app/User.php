<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $filltable=['fullname','email','password','phone','address','created_at','updated_at'];
}
