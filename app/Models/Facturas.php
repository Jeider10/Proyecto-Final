<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Facturas
 * @package App\Models
 * @version November 12, 2020, 4:27 pm UTC
 *
 * @property string $cliente
 * @property string $nombre_empleado
 * @property string $fecha_facturacion
 * @property string $forma_pago
 * @property integer $iva
 * @property integer $total_factura
 */
class Facturas extends Model
{

    public $table = 'Facturas';
    



    public $fillable = [
        'cliente',
        'nombre_empleado',
        'fecha_facturacion',
        'forma_pago',
        'iva',
        'total_factura'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente' => 'string',
        'nombre_empleado' => 'string',
        'fecha_facturacion' => 'date',
        'forma_pago' => 'string',
        'iva' => 'integer',
        'total_factura' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
