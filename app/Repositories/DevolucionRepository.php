<?php

namespace App\Repositories;

use App\Models\Devolucion;
use App\Repositories\BaseRepository;

/**
 * Class DevolucionRepository
 * @package App\Repositories
 * @version November 12, 2020, 4:33 pm UTC
*/

class DevolucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_detalles_articulo',
        'motivo',
        'fecha_devolucion',
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
        return Devolucion::class;
    }
}
