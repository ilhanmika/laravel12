<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 use HasFactory;//has Assigment -> mengisi kolom database menggunakan array
 protected $fillable=[
'image',
'tittle',
'descripcion',
'price',
'stock',
 ];
}
