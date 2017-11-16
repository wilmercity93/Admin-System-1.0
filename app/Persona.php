<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idpersona', 'nombre', 'apellido', 'telefono', 'correo', 'fechaNacimiento', 'direccion', 'idtipofk'];
    protected $primaryKey = 'idpersona';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
