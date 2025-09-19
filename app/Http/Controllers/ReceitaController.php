<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Receita;

class ReceitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $receitas = Receita::paginate(5);
        return view('receitas.index', compact('receitas'));
    }

    public function create()
    {
        return view('receitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'required|min:10',
            'arquivo' => 'required|file|mimes:jpg,png,mp4|max:2048',
        ]);

        $path = $request->file('arquivo')->store('uploads', 'public');

        Receita::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'arquivo' => $path,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('receitas.index');
    }

    public function show(Receita $receita)
    {
        return view('receitas.show', compact('receita'));
    }

    public function edit(Receita $receita)
    {
        $this->authorize('update', $receita);
        return view('receitas.edit', compact('receita'));
    }

    public function update(Request $request, Receita $receita)
    {
        $this->authorize('update', $receita);

        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'required|min:10',
            'arquivo' => 'nullable|file|mimes:jpg,png,mp4|max:2048',
        ]);

        if ($request->hasFile('arquivo')) {
            $path = $request->file('arquivo')->store('uploads', 'public');
            $receita->arquivo = $path;
        }

        $receita->update($request->only('titulo', 'descricao'));
        return redirect()->route('receitas.index');
    }

    public function destroy(Receita $receita)
    {
        $this->authorize('delete', $receita);
        $receita->delete();
        return redirect()->route('receitas.index');
    }
}
