<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email','phone'];
}
