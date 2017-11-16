<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idtipo', 'nombre'];
    protected $primaryKey = 'idtipo';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
