<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProveedoresAPIRequest;
use App\Http\Requests\API\UpdateProveedoresAPIRequest;
use App\Models\Proveedores;
use App\Repositories\ProveedoresRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProveedoresController
 * @package App\Http\Controllers\API
 */

class ProveedoresAPIController extends AppBaseController
{
    /** @var  ProveedoresRepository */
    private $proveedoresRepository;

    public function __construct(ProveedoresRepository $proveedoresRepo)
    {
        $this->proveedoresRepository = $proveedoresRepo;
    }

    /**
     * Display a listing of the Proveedores.
     * GET|HEAD /proveedores
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $proveedores = $this->proveedoresRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($proveedores->toArray(), 'Proveedores retrieved successfully');
    }

    /**
     * Store a newly created Proveedores in storage.
     * POST /proveedores
     *
     * @param CreateProveedoresAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProveedoresAPIRequest $request)
    {
        $input = $request->all();

        $proveedores = $this->proveedoresRepository->create($input);

        return $this->sendResponse($proveedores->toArray(), 'Proveedores saved successfully');
    }

    /**
     * Display the specified Proveedores.
     * GET|HEAD /proveedores/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Proveedores $proveedores */
        $proveedores = $this->proveedoresRepository->find($id);

        if (empty($proveedores)) {
            return $this->sendError('Proveedores not found');
        }

        return $this->sendResponse($proveedores->toArray(), 'Proveedores retrieved successfully');
    }

    /**
     * Update the specified Proveedores in storage.
     * PUT/PATCH /proveedores/{id}
     *
     * @param int $id
     * @param UpdateProveedoresAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProveedoresAPIRequest $request)
    {
        $input = $request->all();

        /** @var Proveedores $proveedores */
        $proveedores = $this->proveedoresRepository->find($id);

        if (empty($proveedores)) {
            return $this->sendError('Proveedores not found');
        }

        $proveedores = $this->proveedoresRepository->update($input, $id);

        return $this->sendResponse($proveedores->toArray(), 'Proveedores updated successfully');
    }

    /**
     * Remove the specified Proveedores from storage.
     * DELETE /proveedores/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Proveedores $proveedores */
        $proveedores = $this->proveedoresRepository->find($id);

        if (empty($proveedores)) {
            return $this->sendError('Proveedores not found');
        }

        $proveedores->delete();

        return $this->sendSuccess('Proveedores deleted successfully');
    }
}
