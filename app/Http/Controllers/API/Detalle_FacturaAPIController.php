<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDetalle_FacturaAPIRequest;
use App\Http\Requests\API\UpdateDetalle_FacturaAPIRequest;
use App\Models\Detalle_Factura;
use App\Repositories\Detalle_FacturaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Detalle_FacturaController
 * @package App\Http\Controllers\API
 */

class Detalle_FacturaAPIController extends AppBaseController
{
    /** @var  Detalle_FacturaRepository */
    private $detalleFacturaRepository;

    public function __construct(Detalle_FacturaRepository $detalleFacturaRepo)
    {
        $this->detalleFacturaRepository = $detalleFacturaRepo;
    }

    /**
     * Display a listing of the Detalle_Factura.
     * GET|HEAD /detalleFacturas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleFacturas = $this->detalleFacturaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($detalleFacturas->toArray(), 'Detalle  Facturas retrieved successfully');
    }

    /**
     * Store a newly created Detalle_Factura in storage.
     * POST /detalleFacturas
     *
     * @param CreateDetalle_FacturaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalle_FacturaAPIRequest $request)
    {
        $input = $request->all();

        $detalleFactura = $this->detalleFacturaRepository->create($input);

        return $this->sendResponse($detalleFactura->toArray(), 'Detalle  Factura saved successfully');
    }

    /**
     * Display the specified Detalle_Factura.
     * GET|HEAD /detalleFacturas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Detalle_Factura $detalleFactura */
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            return $this->sendError('Detalle  Factura not found');
        }

        return $this->sendResponse($detalleFactura->toArray(), 'Detalle  Factura retrieved successfully');
    }

    /**
     * Update the specified Detalle_Factura in storage.
     * PUT/PATCH /detalleFacturas/{id}
     *
     * @param int $id
     * @param UpdateDetalle_FacturaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalle_FacturaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Detalle_Factura $detalleFactura */
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            return $this->sendError('Detalle  Factura not found');
        }

        $detalleFactura = $this->detalleFacturaRepository->update($input, $id);

        return $this->sendResponse($detalleFactura->toArray(), 'Detalle_Factura updated successfully');
    }

    /**
     * Remove the specified Detalle_Factura from storage.
     * DELETE /detalleFacturas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Detalle_Factura $detalleFactura */
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            return $this->sendError('Detalle  Factura not found');
        }

        $detalleFactura->delete();

        return $this->sendSuccess('Detalle  Factura deleted successfully');
    }
}
