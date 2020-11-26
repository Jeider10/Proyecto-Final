<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pedidos
 * @package App\Models
 * @version November 12, 2020, 4:25 pm UTC
 *
 * @property string $nombre
 * @property integer $cantidad
 * @property integer $precio
 */
class Pedidos extends Model
{

    public $table = 'Pedidos';
    



    public $fillable = [
        'nombre',
        'cantidad',
        'precio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'cantidad' => 'integer',
        'precio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
