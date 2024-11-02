<?php

namespace App\Http\Controllers;

use App\Models\Exposicione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExposicioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExposicioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $exposiciones = Exposicione::paginate();

        return view('exposicione.index', compact('exposiciones'))
            ->with('i', ($request->input('page', 1) - 1) * $exposiciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $exposicione = new Exposicione();

        return view('exposicione.create', compact('exposicione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExposicioneRequest $request): RedirectResponse
    {
        Exposicione::create($request->validated());

        return Redirect::route('exposiciones.index')
            ->with('success', 'Exposicione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $exposicione = Exposicione::find($id);

        return view('exposicione.show', compact('exposicione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $exposicione = Exposicione::find($id);

        return view('exposicione.edit', compact('exposicione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExposicioneRequest $request, Exposicione $exposicione): RedirectResponse
    {
        $exposicione->update($request->validated());

        return Redirect::route('exposiciones.index')
            ->with('success', 'Exposicione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Exposicione::find($id)->delete();

        return Redirect::route('exposiciones.index')
            ->with('success', 'Exposicione deleted successfully');
    }
}
