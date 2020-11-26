<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tipo_Articulo
 * @package App\Models
 * @version November 12, 2020, 4:31 pm UTC
 *
 * @property string $descripcion
 * @property integer $cantidad
 */
class Tipo_Articulo extends Model
{

    public $table = 'Tipo_Articulo';
    



    public $fillable = [
        'descripcion',
        'cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'cantidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
