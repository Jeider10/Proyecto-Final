<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTipo_ArticuloAPIRequest;
use App\Http\Requests\API\UpdateTipo_ArticuloAPIRequest;
use App\Models\Tipo_Articulo;
use App\Repositories\Tipo_ArticuloRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Tipo_ArticuloController
 * @package App\Http\Controllers\API
 */

class Tipo_ArticuloAPIController extends AppBaseController
{
    /** @var  Tipo_ArticuloRepository */
    private $tipoArticuloRepository;

    public function __construct(Tipo_ArticuloRepository $tipoArticuloRepo)
    {
        $this->tipoArticuloRepository = $tipoArticuloRepo;
    }

    /**
     * Display a listing of the Tipo_Articulo.
     * GET|HEAD /tipoArticulos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoArticulos = $this->tipoArticuloRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tipoArticulos->toArray(), 'Tipo  Articulos retrieved successfully');
    }

    /**
     * Store a newly created Tipo_Articulo in storage.
     * POST /tipoArticulos
     *
     * @param CreateTipo_ArticuloAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_ArticuloAPIRequest $request)
    {
        $input = $request->all();

        $tipoArticulo = $this->tipoArticuloRepository->create($input);

        return $this->sendResponse($tipoArticulo->toArray(), 'Tipo  Articulo saved successfully');
    }

    /**
     * Display the specified Tipo_Articulo.
     * GET|HEAD /tipoArticulos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Tipo_Articulo $tipoArticulo */
        $tipoArticulo = $this->tipoArticuloRepository->find($id);

        if (empty($tipoArticulo)) {
            return $this->sendError('Tipo  Articulo not found');
        }

        return $this->sendResponse($tipoArticulo->toArray(), 'Tipo  Articulo retrieved successfully');
    }

    /**
     * Update the specified Tipo_Articulo in storage.
     * PUT/PATCH /tipoArticulos/{id}
     *
     * @param int $id
     * @param UpdateTipo_ArticuloAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_ArticuloAPIRequest $request)
    {
        $input = $request->all();

        /** @var Tipo_Articulo $tipoArticulo */
        $tipoArticulo = $this->tipoArticuloRepository->find($id);

        if (empty($tipoArticulo)) {
            return $this->sendError('Tipo  Articulo not found');
        }

        $tipoArticulo = $this->tipoArticuloRepository->update($input, $id);

        return $this->sendResponse($tipoArticulo->toArray(), 'Tipo_Articulo updated successfully');
    }

    /**
     * Remove the specified Tipo_Articulo from storage.
     * DELETE /tipoArticulos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Tipo_Articulo $tipoArticulo */
        $tipoArticulo = $this->tipoArticuloRepository->find($id);

        if (empty($tipoArticulo)) {
            return $this->sendError('Tipo  Articulo not found');
        }

        $tipoArticulo->delete();

        return $this->sendSuccess('Tipo  Articulo deleted successfully');
    }
}
