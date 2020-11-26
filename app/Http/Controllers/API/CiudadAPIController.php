<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCiudadAPIRequest;
use App\Http\Requests\API\UpdateCiudadAPIRequest;
use App\Models\Ciudad;
use App\Repositories\CiudadRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CiudadController
 * @package App\Http\Controllers\API
 */

class CiudadAPIController extends AppBaseController
{
    /** @var  CiudadRepository */
    private $ciudadRepository;

    public function __construct(CiudadRepository $ciudadRepo)
    {
        $this->ciudadRepository = $ciudadRepo;
    }

    /**
     * Display a listing of the Ciudad.
     * GET|HEAD /ciudads
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ciudads = $this->ciudadRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ciudads->toArray(), 'Ciudads retrieved successfully');
    }

    /**
     * Store a newly created Ciudad in storage.
     * POST /ciudads
     *
     * @param CreateCiudadAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCiudadAPIRequest $request)
    {
        $input = $request->all();

        $ciudad = $this->ciudadRepository->create($input);

        return $this->sendResponse($ciudad->toArray(), 'Ciudad saved successfully');
    }

    /**
     * Display the specified Ciudad.
     * GET|HEAD /ciudads/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Ciudad $ciudad */
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            return $this->sendError('Ciudad not found');
        }

        return $this->sendResponse($ciudad->toArray(), 'Ciudad retrieved successfully');
    }

    /**
     * Update the specified Ciudad in storage.
     * PUT/PATCH /ciudads/{id}
     *
     * @param int $id
     * @param UpdateCiudadAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCiudadAPIRequest $request)
    {
        $input = $request->all();

        /** @var Ciudad $ciudad */
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            return $this->sendError('Ciudad not found');
        }

        $ciudad = $this->ciudadRepository->update($input, $id);

        return $this->sendResponse($ciudad->toArray(), 'Ciudad updated successfully');
    }

    /**
     * Remove the specified Ciudad from storage.
     * DELETE /ciudads/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Ciudad $ciudad */
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            return $this->sendError('Ciudad not found');
        }

        $ciudad->delete();

        return $this->sendSuccess('Ciudad deleted successfully');
    }
}
