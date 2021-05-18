<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Ingredientes extends Model
{
    //Nombre de la Conexión
    protected $connection="mongodb";
    protected $collection="INGREDIENTES";
    public $timestamps=false;
    protected $fillable = ['nombre_ingre'];
}
