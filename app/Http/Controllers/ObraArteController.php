<?php

namespace App\Http\Controllers;

use App\Models\ObraArte;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ObraArteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ObraArteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $obraArtes = ObraArte::paginate();

        return view('obra-arte.index', compact('obraArtes'))
            ->with('i', ($request->input('page', 1) - 1) * $obraArtes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $obraArte = new ObraArte();

        return view('obra-arte.create', compact('obraArte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObraArteRequest $request): RedirectResponse
    {
        ObraArte::create($request->validated());

        return Redirect::route('obra-artes.index')
            ->with('success', 'ObraArte created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $obraArte = ObraArte::find($id);

        return view('obra-arte.show', compact('obraArte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $obraArte = ObraArte::find($id);

        return view('obra-arte.edit', compact('obraArte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ObraArteRequest $request, ObraArte $obraArte): RedirectResponse
    {
        $obraArte->update($request->validated());

        return Redirect::route('obra-artes.index')
            ->with('success', 'ObraArte updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ObraArte::find($id)->delete();

        return Redirect::route('obra-artes.index')
            ->with('success', 'ObraArte deleted successfully');
    }
}
