<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sede extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sedes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idsede', 'descripcion', 'direccion'];
    protected $primaryKey = 'idsede';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
