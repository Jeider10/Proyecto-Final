<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDevolucionRequest;
use App\Http\Requests\UpdateDevolucionRequest;
use App\Repositories\DevolucionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DevolucionController extends AppBaseController
{
    /** @var  DevolucionRepository */
    private $devolucionRepository;

    public function __construct(DevolucionRepository $devolucionRepo)
    {
        $this->devolucionRepository = $devolucionRepo;
    }

    /**
     * Display a listing of the Devolucion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $devolucions = $this->devolucionRepository->paginate(10);

        return view('devolucions.index')
            ->with('devolucions', $devolucions);
    }

    /**
     * Show the form for creating a new Devolucion.
     *
     * @return Response
     */
    public function create()
    {
        return view('devolucions.create');
    }

    /**
     * Store a newly created Devolucion in storage.
     *
     * @param CreateDevolucionRequest $request
     *
     * @return Response
     */
    public function store(CreateDevolucionRequest $request)
    {
        $input = $request->all();

        $devolucion = $this->devolucionRepository->create($input);

        Flash::success('Devolucion saved successfully.');

        return redirect(route('devolucions.index'));
    }

    /**
     * Display the specified Devolucion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $devolucion = $this->devolucionRepository->find($id);

        if (empty($devolucion)) {
            Flash::error('Devolucion not found');

            return redirect(route('devolucions.index'));
        }

        return view('devolucions.show')->with('devolucion', $devolucion);
    }

    /**
     * Show the form for editing the specified Devolucion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $devolucion = $this->devolucionRepository->find($id);

        if (empty($devolucion)) {
            Flash::error('Devolucion not found');

            return redirect(route('devolucions.index'));
        }

        return view('devolucions.edit')->with('devolucion', $devolucion);
    }

    /**
     * Update the specified Devolucion in storage.
     *
     * @param int $id
     * @param UpdateDevolucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevolucionRequest $request)
    {
        $devolucion = $this->devolucionRepository->find($id);

        if (empty($devolucion)) {
            Flash::error('Devolucion not found');

            return redirect(route('devolucions.index'));
        }

        $devolucion = $this->devolucionRepository->update($request->all(), $id);

        Flash::success('Devolucion updated successfully.');

        return redirect(route('devolucions.index'));
    }

    /**
     * Remove the specified Devolucion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $devolucion = $this->devolucionRepository->find($id);

        if (empty($devolucion)) {
            Flash::error('Devolucion not found');

            return redirect(route('devolucions.index'));
        }

        $this->devolucionRepository->delete($id);

        Flash::success('Devolucion deleted successfully.');

        return redirect(route('devolucions.index'));
    }
}
