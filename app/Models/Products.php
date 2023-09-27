<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = ['id', 'title', 'description', 'price','instock'];
}
