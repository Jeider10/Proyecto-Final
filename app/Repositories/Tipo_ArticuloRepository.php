<?php

namespace App\Repositories;

use App\Models\Tipo_Articulo;
use App\Repositories\BaseRepository;

/**
 * Class Tipo_ArticuloRepository
 * @package App\Repositories
 * @version November 12, 2020, 4:31 pm UTC
*/

class Tipo_ArticuloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'cantidad'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tipo_Articulo::class;
    }
}
