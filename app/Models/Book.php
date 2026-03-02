<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'shop_db';
    protected $fillable = ['name', 'slug', 'description', 'price', 'image'];
}
