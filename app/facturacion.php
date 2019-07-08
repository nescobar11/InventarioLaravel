<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturacion extends Model
{
    protected $fillable = ['name_client', 'document','address', 'name_product', 'quantity', 'payment_type'];
}
