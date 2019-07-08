<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = ['name', 'quantity','price', 'lote', 'expiration_date'];
}
