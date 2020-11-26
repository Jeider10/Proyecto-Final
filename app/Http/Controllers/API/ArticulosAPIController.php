<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateArticulosAPIRequest;
use App\Http\Requests\API\UpdateArticulosAPIRequest;
use App\Models\Articulos;
use App\Repositories\ArticulosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ArticulosController
 * @package App\Http\Controllers\API
 */

class ArticulosAPIController extends AppBaseController
{
    /** @var  ArticulosRepository */
    private $articulosRepository;

    public function __construct(ArticulosRepository $articulosRepo)
    {
        $this->articulosRepository = $articulosRepo;
    }

    /**
     * Display a listing of the Articulos.
     * GET|HEAD /articulos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $articulos = $this->articulosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($articulos->toArray(), 'Articulos retrieved successfully');
    }

    /**
     * Store a newly created Articulos in storage.
     * POST /articulos
     *
     * @param CreateArticulosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateArticulosAPIRequest $request)
    {
        $input = $request->all();

        $articulos = $this->articulosRepository->create($input);

        return $this->sendResponse($articulos->toArray(), 'Articulos saved successfully');
    }

    /**
     * Display the specified Articulos.
     * GET|HEAD /articulos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Articulos $articulos */
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            return $this->sendError('Articulos not found');
        }

        return $this->sendResponse($articulos->toArray(), 'Articulos retrieved successfully');
    }

    /**
     * Update the specified Articulos in storage.
     * PUT/PATCH /articulos/{id}
     *
     * @param int $id
     * @param UpdateArticulosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticulosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Articulos $articulos */
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            return $this->sendError('Articulos not found');
        }

        $articulos = $this->articulosRepository->update($input, $id);

        return $this->sendResponse($articulos->toArray(), 'Articulos updated successfully');
    }

    /**
     * Remove the specified Articulos from storage.
     * DELETE /articulos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Articulos $articulos */
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            return $this->sendError('Articulos not found');
        }

        $articulos->delete();

        return $this->sendSuccess('Articulos deleted successfully');
    }
}
