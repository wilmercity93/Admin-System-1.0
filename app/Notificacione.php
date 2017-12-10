<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notificacione extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notificaciones';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idnotificacion', 'descripcion', 'idusersfk'];
    protected $primaryKey = 'idnotificacion';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
