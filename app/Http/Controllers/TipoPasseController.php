<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPasse;
use Inertia\Inertia;
use Exception;

class TipoPasseController extends Controller
{
    public function index()
    {
    return Inertia::render('TipoPasses/Index', [
    'items' => TipoPasse::all()
]);

    }

    public function create()
    {
        return Inertia::render('TipoPasses/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'estado' => 'required',
            'codigo' => 'required',
        ]);

        TipoPasse::create($request->only('descricao', 'estado', 'codigo'));

        return redirect()->route('tipo_passes.index');
    }

    public function edit(TipoPasse $tipo_passe)
    {
        return Inertia::render('TipoPasses/Edit', [
            'item' => $tipo_passe
        ]);
    }

    public function update(Request $request, TipoPasse $tipo_passe)
    {
        $request->validate([
            'descricao' => 'required',
            'estado' => 'required',
            'codigo' => 'required',
        ]);

        $tipo_passe->update($request->only('descricao', 'estado', 'codigo'));

        return redirect()->route('tipo_passes.index');
    }

    public function destroy(TipoPasse $tipo_passe)
    {
        $tipo_passe->delete();

        return back();
    }
}
