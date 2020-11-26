<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_ArticuloRequest;
use App\Http\Requests\UpdateTipo_ArticuloRequest;
use App\Repositories\Tipo_ArticuloRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Tipo_ArticuloController extends AppBaseController
{
    /** @var  Tipo_ArticuloRepository */
    private $tipoArticuloRepository;

    public function __construct(Tipo_ArticuloRepository $tipoArticuloRepo)
    {
        $this->tipoArticuloRepository = $tipoArticuloRepo;
    }

    /**
     * Display a listing of the Tipo_Articulo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoArticulos = $this->tipoArticuloRepository->paginate(10);

        return view('tipo__articulos.index')
            ->with('tipoArticulos', $tipoArticulos);
    }

    /**
     * Show the form for creating a new Tipo_Articulo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo__articulos.create');
    }

    /**
     * Store a newly created Tipo_Articulo in storage.
     *
     * @param CreateTipo_ArticuloRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_ArticuloRequest $request)
    {
        $input = $request->all();

        $tipoArticulo = $this->tipoArticuloRepository->create($input);

        Flash::success('Tipo  Articulo saved successfully.');

        return redirect(route('tipoArticulos.index'));
    }

    /**
     * Display the specified Tipo_Articulo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoArticulo = $this->tipoArticuloRepository->find($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo  Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        return view('tipo__articulos.show')->with('tipoArticulo', $tipoArticulo);
    }

    /**
     * Show the form for editing the specified Tipo_Articulo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoArticulo = $this->tipoArticuloRepository->find($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo  Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        return view('tipo__articulos.edit')->with('tipoArticulo', $tipoArticulo);
    }

    /**
     * Update the specified Tipo_Articulo in storage.
     *
     * @param int $id
     * @param UpdateTipo_ArticuloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_ArticuloRequest $request)
    {
        $tipoArticulo = $this->tipoArticuloRepository->find($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo  Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        $tipoArticulo = $this->tipoArticuloRepository->update($request->all(), $id);

        Flash::success('Tipo  Articulo updated successfully.');

        return redirect(route('tipoArticulos.index'));
    }

    /**
     * Remove the specified Tipo_Articulo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoArticulo = $this->tipoArticuloRepository->find($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo  Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        $this->tipoArticuloRepository->delete($id);

        Flash::success('Tipo  Articulo deleted successfully.');

        return redirect(route('tipoArticulos.index'));
    }
}
