<?php

namespace App\Http\Controllers;

use App\Models\EstiloArte;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EstiloArteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EstiloArteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $estiloArtes = EstiloArte::paginate();

        return view('estilo-arte.index', compact('estiloArtes'))
            ->with('i', ($request->input('page', 1) - 1) * $estiloArtes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $estiloArte = new EstiloArte();

        return view('estilo-arte.create', compact('estiloArte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstiloArteRequest $request): RedirectResponse
    {
        EstiloArte::create($request->validated());

        return Redirect::route('estilo-artes.index')
            ->with('success', 'EstiloArte created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $estiloArte = EstiloArte::find($id);

        return view('estilo-arte.show', compact('estiloArte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $estiloArte = EstiloArte::find($id);

        return view('estilo-arte.edit', compact('estiloArte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstiloArteRequest $request, EstiloArte $estiloArte): RedirectResponse
    {
        $estiloArte->update($request->validated());

        return Redirect::route('estilo-artes.index')
            ->with('success', 'EstiloArte updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        EstiloArte::find($id)->delete();

        return Redirect::route('estilo-artes.index')
            ->with('success', 'EstiloArte deleted successfully');
    }
}
