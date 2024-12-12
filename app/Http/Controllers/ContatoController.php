<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::paginate(10);
        return view('welcome', compact('contatos')); 
    }

    public function create()
    {
        return view('contatos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|min:5',
            'contato' => 'required|digits:9',
            'email' => 'required|email|unique:contatos,email',
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O nome deve ser uma string.',
            'nome.min' => 'O nome deve ter pelo menos 5 caracteres.',
            'contato.required' => 'O campo contato é obrigatório.',
            'contato.digits' => 'O contato deve conter exatamente 9 dígitos.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'Já existe um contato com este e-mail.',
        ]);

        Contato::create([
            'nome' => $request->nome,
            'contato' => $request->contato,
            'email' => $request->email,
        ]);

        return redirect()->route('contatos.dashboard')->with('success', 'Contato criado com sucesso!');
    }

    public function dashboard(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $contatos = Contato::where('nome', 'like', "%{$search}%")
                ->orWhere('contato', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->paginate(10);  
        } else {
            $contatos = Contato::paginate(10);  
        }

        return view('contatos.dashboard', compact('contatos'));
    }

    public function show($id)
    {
        $contato = Contato::findOrFail($id);
        return view('contatos.show', compact('contato'));
    }

    public function edit($id)
    {
        $contato = Contato::findOrFail($id);
        return view('contatos.edit', compact('contato'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|min:5',
            'contato' => 'required|digits:9',
            'email' => 'required|email|unique:contatos,email,' . $id,
        ]);

        $contato = Contato::findOrFail($id);
        $contato->update([
            'nome' => $request->nome,
            'contato' => $request->contato,
            'email' => $request->email,
        ]);

        return redirect()->route('contatos.dashboard')->with('success', 'Contato atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();
        return redirect()->route('contatos.dashboard')->with('success', 'Contato excluído com sucesso!');
    }
}
