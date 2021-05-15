<?php

namespace App\Models;

use App\Models\Categorias;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Productos extends Model
{
    //Nombre de la conexión
    protected $connection = "mongodb";

    //Nombre de l colección
    protected $collection = "PRODUCTOS";

    //Desactivar los campos created at y updated at
    public $timestamps = false;

    //Nombres de columnas
    protected $fillable = ['id_categoria', 'nombre_prod', 'descripcion_prod', 'precio_prod', 'precio2_prod', 'estado_prod'];

    public function obtener_categoria()
    {
        return $this->hasOne(Categorias::class, '_id', 'id_categoria');
    }
}
