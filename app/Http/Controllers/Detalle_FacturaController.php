<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalle_FacturaRequest;
use App\Http\Requests\UpdateDetalle_FacturaRequest;
use App\Repositories\Detalle_FacturaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detalle_FacturaController extends AppBaseController
{
    /** @var  Detalle_FacturaRepository */
    private $detalleFacturaRepository;

    public function __construct(Detalle_FacturaRepository $detalleFacturaRepo)
    {
        $this->detalleFacturaRepository = $detalleFacturaRepo;
    }

    /**
     * Display a listing of the Detalle_Factura.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleFacturas = $this->detalleFacturaRepository->paginate(10);

        return view('detalle__facturas.index')
            ->with('detalleFacturas', $detalleFacturas);
    }

    /**
     * Show the form for creating a new Detalle_Factura.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle__facturas.create');
    }

    /**
     * Store a newly created Detalle_Factura in storage.
     *
     * @param CreateDetalle_FacturaRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalle_FacturaRequest $request)
    {
        $input = $request->all();

        $detalleFactura = $this->detalleFacturaRepository->create($input);

        Flash::success('Detalle  Factura saved successfully.');

        return redirect(route('detalleFacturas.index'));
    }

    /**
     * Display the specified Detalle_Factura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle  Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        return view('detalle__facturas.show')->with('detalleFactura', $detalleFactura);
    }

    /**
     * Show the form for editing the specified Detalle_Factura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle  Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        return view('detalle__facturas.edit')->with('detalleFactura', $detalleFactura);
    }

    /**
     * Update the specified Detalle_Factura in storage.
     *
     * @param int $id
     * @param UpdateDetalle_FacturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalle_FacturaRequest $request)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle  Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        $detalleFactura = $this->detalleFacturaRepository->update($request->all(), $id);

        Flash::success('Detalle  Factura updated successfully.');

        return redirect(route('detalleFacturas.index'));
    }

    /**
     * Remove the specified Detalle_Factura from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle  Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        $this->detalleFacturaRepository->delete($id);

        Flash::success('Detalle  Factura deleted successfully.');

        return redirect(route('detalleFacturas.index'));
    }
}
