<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Articulos
 * @package App\Models
 * @version November 12, 2020, 4:24 pm UTC
 *
 * @property string $descripcion
 * @property integer $precio_venta
 * @property integer $precio_costo
 * @property string $tipo_articulo
 * @property string $proveedor
 * @property string $fecha_ibgreso
 */
class Articulos extends Model
{

    public $table = 'Articulos';
    



    public $fillable = [
        'descripcion',
        'precio_venta',
        'precio_costo',
        'tipo_articulo',
        'proveedor',
        'fecha_ibgreso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'precio_venta' => 'integer',
        'precio_costo' => 'integer',
        'tipo_articulo' => 'string',
        'proveedor' => 'string',
        'fecha_ibgreso' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
