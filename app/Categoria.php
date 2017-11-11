<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcategoria', 'nombre', 'descripcion'];
    protected $primaryKey = 'idcategoria';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
