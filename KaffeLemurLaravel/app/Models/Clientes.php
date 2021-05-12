<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Clientes extends Model
{
    protected $connection="mongodb";
    protected $collection="CLIENTES";
    public $timestamps=false;
    protected $fillable = ['nombre_cli','apellido_cli','email_cli','usuario_cli','contra_cli','telefono_cli','direccion_cli'];
}
