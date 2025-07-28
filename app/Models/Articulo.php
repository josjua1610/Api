<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Factories\HasFactory;

class Articulo extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'articulos'; // Nombre de la colección en MongoDB
    protected $fillable = ['descripcion', 'price', 'stock'];
}
