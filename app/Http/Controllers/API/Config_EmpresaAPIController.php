<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateConfig_EmpresaAPIRequest;
use App\Http\Requests\API\UpdateConfig_EmpresaAPIRequest;
use App\Models\Config_Empresa;
use App\Repositories\Config_EmpresaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Config_EmpresaController
 * @package App\Http\Controllers\API
 */

class Config_EmpresaAPIController extends AppBaseController
{
    /** @var  Config_EmpresaRepository */
    private $configEmpresaRepository;

    public function __construct(Config_EmpresaRepository $configEmpresaRepo)
    {
        $this->configEmpresaRepository = $configEmpresaRepo;
    }

    /**
     * Display a listing of the Config_Empresa.
     * GET|HEAD /configEmpresas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $configEmpresas = $this->configEmpresaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($configEmpresas->toArray(), 'Config  Empresas retrieved successfully');
    }

    /**
     * Store a newly created Config_Empresa in storage.
     * POST /configEmpresas
     *
     * @param CreateConfig_EmpresaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateConfig_EmpresaAPIRequest $request)
    {
        $input = $request->all();

        $configEmpresa = $this->configEmpresaRepository->create($input);

        return $this->sendResponse($configEmpresa->toArray(), 'Config  Empresa saved successfully');
    }

    /**
     * Display the specified Config_Empresa.
     * GET|HEAD /configEmpresas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Config_Empresa $configEmpresa */
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            return $this->sendError('Config  Empresa not found');
        }

        return $this->sendResponse($configEmpresa->toArray(), 'Config  Empresa retrieved successfully');
    }

    /**
     * Update the specified Config_Empresa in storage.
     * PUT/PATCH /configEmpresas/{id}
     *
     * @param int $id
     * @param UpdateConfig_EmpresaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConfig_EmpresaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Config_Empresa $configEmpresa */
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            return $this->sendError('Config  Empresa not found');
        }

        $configEmpresa = $this->configEmpresaRepository->update($input, $id);

        return $this->sendResponse($configEmpresa->toArray(), 'Config_Empresa updated successfully');
    }

    /**
     * Remove the specified Config_Empresa from storage.
     * DELETE /configEmpresas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Config_Empresa $configEmpresa */
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            return $this->sendError('Config  Empresa not found');
        }

        $configEmpresa->delete();

        return $this->sendSuccess('Config  Empresa deleted successfully');
    }
}
