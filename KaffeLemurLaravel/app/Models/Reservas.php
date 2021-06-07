<?php

namespace App\Models;

use App\Models\Clientes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Reservas extends Model
{
     //Nombre de la conexión
     protected $connection = "mongodb";

     //Nombre de l colección
     protected $collection = "RESERVAS";
 
     //Desactivar los campos created at y updated at
     public $timestamps = false;
 
     //Nombres de columnas
     protected $fillable = ['id_cli', 'fecha_reserva', 'total_reserva', 'concepto'];
 
     public function obtener_cliente()
     {
         return $this->hasOne(Clientes::class, '_id', 'id_cli');
     }
}
