<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Inicio
 * @package App\Models
 * @version November 12, 2020, 3:52 pm UTC
 *
 */
class Inicio extends Model
{

    public $table = 'Inicio';
    



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
