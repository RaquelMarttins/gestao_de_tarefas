<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Prestador;
use App\Models\Condominio;
use Inertia\Inertia;

class TarefaController extends Controller
{
    public function index()
    {

        $tarefas = Tarefa::with('condominio', 'prestador')->get();

        return Inertia::render('Tarefas/Index', ['tarefas' => $tarefas]);
    }

    public function create()
    {
        return Inertia::render('Tarefas/Create', [
            'condominios' => Condominio::all(),
            'prestadores' => Prestador::all(),
        ]);
    }

    public function store(Request $request)
    {
        Tarefa::create($request->all());

        return redirect()->route('tarefas.index')->with('success', '');
    }


    public function show(Tarefa $tarefa)
    {
        return Inertia::render('', []);
    }


    public function edit(Tarefa $tarefa)
    {
        return Inertia::render('Tarefa/Edit', [
            'tarefa' => $tarefa,
            'condominios' => Condominio::all(),
            'prestadores' => Prestador::all()
        ]);
    }

    public function update(Tarefa $tarefa, Request $request)
    {
        $tarefa->update($request->all());

        return redirect()->route('tarefas.index')->with('success', '');
    }

    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();

        return redirect()->route('tarefas.index')->with('success', '');
    }
}
