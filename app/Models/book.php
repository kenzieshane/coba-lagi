<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'shop_db';
    protected $fillable = ['name', 'slug', 'description', 'price', 'image'];
}
