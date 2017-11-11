<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estado extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estados';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idestado', 'nombre'];
    protected $primaryKey = 'idestado';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
