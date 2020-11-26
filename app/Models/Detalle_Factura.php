<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Detalle_Factura
 * @package App\Models
 * @version November 12, 2020, 4:29 pm UTC
 *
 * @property string $id_articulo
 * @property integer $cantidad
 * @property integer $total
 */
class Detalle_Factura extends Model
{

    public $table = 'Detalle_Factura';
    



    public $fillable = [
        'id_articulo',
        'cantidad',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_articulo' => 'string',
        'cantidad' => 'integer',
        'total' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
