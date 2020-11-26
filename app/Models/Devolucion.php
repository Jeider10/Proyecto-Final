<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Devolucion
 * @package App\Models
 * @version November 12, 2020, 4:33 pm UTC
 *
 * @property string $id_detalles_articulo
 * @property string $motivo
 * @property string $fecha_devolucion
 * @property integer $cantidad
 */
class Devolucion extends Model
{

    public $table = 'Devolucion';
    



    public $fillable = [
        'id_detalles_articulo',
        'motivo',
        'fecha_devolucion',
        'cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_detalles_articulo' => 'string',
        'motivo' => 'string',
        'fecha_devolucion' => 'date',
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
