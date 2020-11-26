<?php

namespace App\Repositories;

use App\Models\Detalle_Factura;
use App\Repositories\BaseRepository;

/**
 * Class Detalle_FacturaRepository
 * @package App\Repositories
 * @version November 12, 2020, 4:29 pm UTC
*/

class Detalle_FacturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_articulo',
        'cantidad',
        'total'
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
        return Detalle_Factura::class;
    }
}
