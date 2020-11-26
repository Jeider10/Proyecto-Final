<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clientes
 * @package App\Models
 * @version November 12, 2020, 4:11 pm UTC
 *
 * @property string $nombres
 * @property string $apellidos
 * @property string $direccion
 * @property string $ciudad
 * @property integer $telefono
 */
class Clientes extends Model
{

    public $table = 'Clientes';
    



    public $fillable = [
        'nombres',
        'apellidos',
        'direccion',
        'ciudad',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombres' => 'string',
        'apellidos' => 'string',
        'direccion' => 'string',
        'ciudad' => 'string',
        'telefono' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
