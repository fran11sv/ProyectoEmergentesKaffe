<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Categorias extends Model
{
    //Nombre de la Conexión
    protected $connection="mongodb";
    protected $collection="CATEGORIAS";
    public $timestamps=false;
    protected $fillable = ['categoria'];
}
