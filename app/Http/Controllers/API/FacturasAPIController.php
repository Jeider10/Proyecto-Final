<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFacturasAPIRequest;
use App\Http\Requests\API\UpdateFacturasAPIRequest;
use App\Models\Facturas;
use App\Repositories\FacturasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class FacturasController
 * @package App\Http\Controllers\API
 */

class FacturasAPIController extends AppBaseController
{
    /** @var  FacturasRepository */
    private $facturasRepository;

    public function __construct(FacturasRepository $facturasRepo)
    {
        $this->facturasRepository = $facturasRepo;
    }

    /**
     * Display a listing of the Facturas.
     * GET|HEAD /facturas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $facturas = $this->facturasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($facturas->toArray(), 'Facturas retrieved successfully');
    }

    /**
     * Store a newly created Facturas in storage.
     * POST /facturas
     *
     * @param CreateFacturasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturasAPIRequest $request)
    {
        $input = $request->all();

        $facturas = $this->facturasRepository->create($input);

        return $this->sendResponse($facturas->toArray(), 'Facturas saved successfully');
    }

    /**
     * Display the specified Facturas.
     * GET|HEAD /facturas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Facturas $facturas */
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            return $this->sendError('Facturas not found');
        }

        return $this->sendResponse($facturas->toArray(), 'Facturas retrieved successfully');
    }

    /**
     * Update the specified Facturas in storage.
     * PUT/PATCH /facturas/{id}
     *
     * @param int $id
     * @param UpdateFacturasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturasAPIRequest $request)
    {
        $input = $request->all();

        /** @var Facturas $facturas */
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            return $this->sendError('Facturas not found');
        }

        $facturas = $this->facturasRepository->update($input, $id);

        return $this->sendResponse($facturas->toArray(), 'Facturas updated successfully');
    }

    /**
     * Remove the specified Facturas from storage.
     * DELETE /facturas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Facturas $facturas */
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            return $this->sendError('Facturas not found');
        }

        $facturas->delete();

        return $this->sendSuccess('Facturas deleted successfully');
    }
}
