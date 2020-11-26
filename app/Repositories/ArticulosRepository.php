<?php

namespace App\Repositories;

use App\Models\Articulos;
use App\Repositories\BaseRepository;

/**
 * Class ArticulosRepository
 * @package App\Repositories
 * @version November 12, 2020, 4:24 pm UTC
*/

class ArticulosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'precio_venta',
        'precio_costo',
        'tipo_articulo',
        'proveedor',
        'fecha_ibgreso'
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
        return Articulos::class;
    }
}
