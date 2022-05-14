<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionProducto extends Model
{
    use HasFactory;
    protected $fillable=['descripcion','precio','contacto_celular','rubro','fecha','imagen'];
}
