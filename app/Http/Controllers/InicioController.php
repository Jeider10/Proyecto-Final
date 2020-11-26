<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInicioRequest;
use App\Http\Requests\UpdateInicioRequest;
use App\Repositories\InicioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InicioController extends AppBaseController
{
    /** @var  InicioRepository */
    private $inicioRepository;

    public function __construct(InicioRepository $inicioRepo)
    {
        $this->inicioRepository = $inicioRepo;
    }

    /**
     * Display a listing of the Inicio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inicios = $this->inicioRepository->paginate(10);

        return view('inicios.index')
            ->with('inicios', $inicios);
    }

    /**
     * Show the form for creating a new Inicio.
     *
     * @return Response
     */
    public function create()
    {
        return view('inicios.create');
    }

    /**
     * Store a newly created Inicio in storage.
     *
     * @param CreateInicioRequest $request
     *
     * @return Response
     */
    public function store(CreateInicioRequest $request)
    {
        $input = $request->all();

        $inicio = $this->inicioRepository->create($input);

        Flash::success('Inicio saved successfully.');

        return redirect(route('inicios.index'));
    }

    /**
     * Display the specified Inicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inicio = $this->inicioRepository->find($id);

        if (empty($inicio)) {
            Flash::error('Inicio not found');

            return redirect(route('inicios.index'));
        }

        return view('inicios.show')->with('inicio', $inicio);
    }

    /**
     * Show the form for editing the specified Inicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inicio = $this->inicioRepository->find($id);

        if (empty($inicio)) {
            Flash::error('Inicio not found');

            return redirect(route('inicios.index'));
        }

        return view('inicios.edit')->with('inicio', $inicio);
    }

    /**
     * Update the specified Inicio in storage.
     *
     * @param int $id
     * @param UpdateInicioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInicioRequest $request)
    {
        $inicio = $this->inicioRepository->find($id);

        if (empty($inicio)) {
            Flash::error('Inicio not found');

            return redirect(route('inicios.index'));
        }

        $inicio = $this->inicioRepository->update($request->all(), $id);

        Flash::success('Inicio updated successfully.');

        return redirect(route('inicios.index'));
    }

    /**
     * Remove the specified Inicio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inicio = $this->inicioRepository->find($id);

        if (empty($inicio)) {
            Flash::error('Inicio not found');

            return redirect(route('inicios.index'));
        }

        $this->inicioRepository->delete($id);

        Flash::success('Inicio deleted successfully.');

        return redirect(route('inicios.index'));
    }
}
