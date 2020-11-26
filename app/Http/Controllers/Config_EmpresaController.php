<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConfig_EmpresaRequest;
use App\Http\Requests\UpdateConfig_EmpresaRequest;
use App\Repositories\Config_EmpresaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Config_EmpresaController extends AppBaseController
{
    /** @var  Config_EmpresaRepository */
    private $configEmpresaRepository;

    public function __construct(Config_EmpresaRepository $configEmpresaRepo)
    {
        $this->configEmpresaRepository = $configEmpresaRepo;
    }

    /**
     * Display a listing of the Config_Empresa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $configEmpresas = $this->configEmpresaRepository->paginate(10);

        return view('config__empresas.index')
            ->with('configEmpresas', $configEmpresas);
    }

    /**
     * Show the form for creating a new Config_Empresa.
     *
     * @return Response
     */
    public function create()
    {
        return view('config__empresas.create');
    }

    /**
     * Store a newly created Config_Empresa in storage.
     *
     * @param CreateConfig_EmpresaRequest $request
     *
     * @return Response
     */
    public function store(CreateConfig_EmpresaRequest $request)
    {
        $input = $request->all();

        $configEmpresa = $this->configEmpresaRepository->create($input);

        Flash::success('Config  Empresa saved successfully.');

        return redirect(route('configEmpresas.index'));
    }

    /**
     * Display the specified Config_Empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config  Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        return view('config__empresas.show')->with('configEmpresa', $configEmpresa);
    }

    /**
     * Show the form for editing the specified Config_Empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config  Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        return view('config__empresas.edit')->with('configEmpresa', $configEmpresa);
    }

    /**
     * Update the specified Config_Empresa in storage.
     *
     * @param int $id
     * @param UpdateConfig_EmpresaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConfig_EmpresaRequest $request)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config  Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        $configEmpresa = $this->configEmpresaRepository->update($request->all(), $id);

        Flash::success('Config  Empresa updated successfully.');

        return redirect(route('configEmpresas.index'));
    }

    /**
     * Remove the specified Config_Empresa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config  Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        $this->configEmpresaRepository->delete($id);

        Flash::success('Config  Empresa deleted successfully.');

        return redirect(route('configEmpresas.index'));
    }
}
