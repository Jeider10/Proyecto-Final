<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDevolucionAPIRequest;
use App\Http\Requests\API\UpdateDevolucionAPIRequest;
use App\Models\Devolucion;
use App\Repositories\DevolucionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DevolucionController
 * @package App\Http\Controllers\API
 */

class DevolucionAPIController extends AppBaseController
{
    /** @var  DevolucionRepository */
    private $devolucionRepository;

    public function __construct(DevolucionRepository $devolucionRepo)
    {
        $this->devolucionRepository = $devolucionRepo;
    }

    /**
     * Display a listing of the Devolucion.
     * GET|HEAD /devolucions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $devolucions = $this->devolucionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($devolucions->toArray(), 'Devolucions retrieved successfully');
    }

    /**
     * Store a newly created Devolucion in storage.
     * POST /devolucions
     *
     * @param CreateDevolucionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDevolucionAPIRequest $request)
    {
        $input = $request->all();

        $devolucion = $this->devolucionRepository->create($input);

        return $this->sendResponse($devolucion->toArray(), 'Devolucion saved successfully');
    }

    /**
     * Display the specified Devolucion.
     * GET|HEAD /devolucions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Devolucion $devolucion */
        $devolucion = $this->devolucionRepository->find($id);

        if (empty($devolucion)) {
            return $this->sendError('Devolucion not found');
        }

        return $this->sendResponse($devolucion->toArray(), 'Devolucion retrieved successfully');
    }

    /**
     * Update the specified Devolucion in storage.
     * PUT/PATCH /devolucions/{id}
     *
     * @param int $id
     * @param UpdateDevolucionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevolucionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Devolucion $devolucion */
        $devolucion = $this->devolucionRepository->find($id);

        if (empty($devolucion)) {
            return $this->sendError('Devolucion not found');
        }

        $devolucion = $this->devolucionRepository->update($input, $id);

        return $this->sendResponse($devolucion->toArray(), 'Devolucion updated successfully');
    }

    /**
     * Remove the specified Devolucion from storage.
     * DELETE /devolucions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Devolucion $devolucion */
        $devolucion = $this->devolucionRepository->find($id);

        if (empty($devolucion)) {
            return $this->sendError('Devolucion not found');
        }

        $devolucion->delete();

        return $this->sendSuccess('Devolucion deleted successfully');
    }
}
