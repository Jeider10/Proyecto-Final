<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Config_Empresa
 * @package App\Models
 * @version November 12, 2020, 4:05 pm UTC
 *
 * @property string $nombre
 * @property string $nit
 * @property string $ciudad
 * @property string $direccion
 * @property integer $telefono
 * @property string $logo
 */
class Config_Empresa extends Model
{

    public $table = 'Config_Empresa';
    



    public $fillable = [
        'nombre',
        'nit',
        'ciudad',
        'direccion',
        'telefono',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'nit' => 'string',
        'ciudad' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
