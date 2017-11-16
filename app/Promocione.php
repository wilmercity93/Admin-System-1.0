<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocione extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promociones';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idpromocion', 'descripcion', 'procentaje', 'fechainicio', 'fechafin'];
    protected $primaryKey = 'idpromocion';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
