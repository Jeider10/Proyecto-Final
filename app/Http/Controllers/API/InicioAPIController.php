<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateInicioAPIRequest;
use App\Http\Requests\API\UpdateInicioAPIRequest;
use App\Models\Inicio;
use App\Repositories\InicioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class InicioController
 * @package App\Http\Controllers\API
 */

class InicioAPIController extends AppBaseController
{
    /** @var  InicioRepository */
    private $inicioRepository;

    public function __construct(InicioRepository $inicioRepo)
    {
        $this->inicioRepository = $inicioRepo;
    }

    /**
     * Display a listing of the Inicio.
     * GET|HEAD /inicios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $inicios = $this->inicioRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($inicios->toArray(), 'Inicios retrieved successfully');
    }

    /**
     * Store a newly created Inicio in storage.
     * POST /inicios
     *
     * @param CreateInicioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateInicioAPIRequest $request)
    {
        $input = $request->all();

        $inicio = $this->inicioRepository->create($input);

        return $this->sendResponse($inicio->toArray(), 'Inicio saved successfully');
    }

    /**
     * Display the specified Inicio.
     * GET|HEAD /inicios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Inicio $inicio */
        $inicio = $this->inicioRepository->find($id);

        if (empty($inicio)) {
            return $this->sendError('Inicio not found');
        }

        return $this->sendResponse($inicio->toArray(), 'Inicio retrieved successfully');
    }

    /**
     * Update the specified Inicio in storage.
     * PUT/PATCH /inicios/{id}
     *
     * @param int $id
     * @param UpdateInicioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInicioAPIRequest $request)
    {
        $input = $request->all();

        /** @var Inicio $inicio */
        $inicio = $this->inicioRepository->find($id);

        if (empty($inicio)) {
            return $this->sendError('Inicio not found');
        }

        $inicio = $this->inicioRepository->update($input, $id);

        return $this->sendResponse($inicio->toArray(), 'Inicio updated successfully');
    }

    /**
     * Remove the specified Inicio from storage.
     * DELETE /inicios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Inicio $inicio */
        $inicio = $this->inicioRepository->find($id);

        if (empty($inicio)) {
            return $this->sendError('Inicio not found');
        }

        $inicio->delete();

        return $this->sendSuccess('Inicio deleted successfully');
    }
}
