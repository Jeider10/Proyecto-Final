<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ciudad
 * @package App\Models
 * @version November 12, 2020, 4:20 pm UTC
 *
 * @property string $nombre
 * @property string $ubicacion
 * @property integer $telefono
 */
class Ciudad extends Model
{

    public $table = 'Ciudad';
    



    public $fillable = [
        'nombre',
        'ubicacion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'ubicacion' => 'string',
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
