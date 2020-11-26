<?php

namespace App\Repositories;

use App\Models\Inicio;
use App\Repositories\BaseRepository;

/**
 * Class InicioRepository
 * @package App\Repositories
 * @version November 12, 2020, 3:52 pm UTC
*/

class InicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Inicio::class;
    }
}
