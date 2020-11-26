<?php

namespace App\Repositories;

use App\Models\Config_Empresa;
use App\Repositories\BaseRepository;

/**
 * Class Config_EmpresaRepository
 * @package App\Repositories
 * @version November 12, 2020, 4:05 pm UTC
*/

class Config_EmpresaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nit',
        'ciudad',
        'direccion',
        'telefono',
        'logo'
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
        return Config_Empresa::class;
    }
}
