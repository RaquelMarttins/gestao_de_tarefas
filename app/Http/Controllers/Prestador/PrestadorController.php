<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestador;
use App\Models\Tarefa;
use Inertia\Inertia;

class PrestadorController extends Controller
{
    public function index()
    {
        $prestadores = Prestador::with('tarefas')->get();

        return Inertia::render('Prestador/Index', ['tarefas' => $prestadores]);
    }

    public function create()
    {
        return Inertia::render('Prestador/Create', [
            'tarefas' => Tarefa::all(),
        ]);
    }

    public function store(Request $request)
    {
        Prestador::create($request->all());
        return redirect()->route('prestadores.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Prestador $prestador)
    {
        return Inertia::render('Prestadores/Edit', [
            'prestador' => $prestador,
            'tarefas' => Tarefa::all(),
        ]);
    }

    public function update(Request $request, Prestador $prestador)
    {
        $prestador->update($request->all());
        return redirect()->route('prestadores.index');
    }

    public function destroy(Prestador $prestador)
    {
        $prestador->delete();
        return redirect()->route('prestadores.index');
    }
}
