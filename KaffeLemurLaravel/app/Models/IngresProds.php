<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class IngresProds extends Model
{
      //Nombre de la conexión
      protected $connection = "mongodb";

      //Nombre de l colección
      protected $collection = "INGRES_PRODS";
  
      //Desactivar los campos created at y updated at
      public $timestamps = false;
  
      //Nombres de columnas
      protected $fillable = ['id_producto', 'id_ingrediente'];

      public function obtener_producto()
      {
        return $this->hasOne(Productos::class, '_id', 'id_producto');
      }

      public function obtener_ingrediente()
      {
        return $this->hasOne(Ingredientes::class, '_id', 'id_ingrediente');
      }
  
}
