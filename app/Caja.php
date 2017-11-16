<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caja extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cajas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcaja', 'nombre', 'idsedefk'];
    protected $primaryKey = 'idcaja';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
