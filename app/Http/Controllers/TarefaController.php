<?php
 
namespace App\Http\Controllers;
 
use App\Models\tarefa;
use Illuminate\Http\Request;
 
class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('index', compact('tarefas'));
    }
 
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tarefa' => 'required',
 
        ]);
 
        Tarefa::create([
            'tarefa' => $request->tarefa,
            'status' => 0
        ]);
 
        return redirect()->route('home.index');
    }
 
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tarefa $tarefa)
    {
        return view('editar', compact('tarefa'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tarefa $tarefa)
    {
        //
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('home.index');
    }
}