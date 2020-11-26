<?php

namespace App\Repositories;

use App\Models\Facturas;
use App\Repositories\BaseRepository;

/**
 * Class FacturasRepository
 * @package App\Repositories
 * @version November 12, 2020, 4:27 pm UTC
*/

class FacturasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cliente',
        'nombre_empleado',
        'fecha_facturacion',
        'forma_pago',
        'iva',
        'total_factura'
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
        return Facturas::class;
    }
}
