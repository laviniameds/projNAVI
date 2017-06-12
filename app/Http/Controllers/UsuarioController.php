<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

    public function index()
    {
      return view ('home');
    }

    public function pagEditar()
    {
      return view ('editar');
    }

    public function pagDeletar()
    {
      return view ('deletar');
    }

    public function update()
    {
        $this->validate(request(), [
          'nome' => 'required|string|max:255',
          'email' => 'required|string|email|max:255',
          'cpf' => 'required|regex:([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})',
          'rg' => 'required|regex:([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3})',
          'nasc' => 'required',
          'genero' => 'required',
          'rua' => 'required',
          'tipo' => 'required',
          'numero' => 'required',
          'complemento' => 'required',
          'bairro' => 'required',
          'cidade' => 'required',
          'estado' => 'required|max:2',
          'cep' => 'required|regex:([0-9]{5}[\-]?[0-9]{3})',
            ]);

        $user = User::find(request('id'));

        $user->update([
          'nome' => request('nome'),
          'email' => request('email'),
          'cpf' => request('cpf'),
          'rg' => request('rg'),
          'nasc' => request('nasc'),
          'genero' => request('genero'),
          'rua' => request('rua'),
          'tipo' => request('tipo'),
          'numero' => request('numero'),
          'complemento' => request('complemento'),
          'bairro' => request('bairro'),
          'cidade' => request('cidade'),
          'estado' => request('estado'),
          'cep' => request('cep'),
            ]);

      return redirect()->home();
    }

    public function destroy()
    {
        $user = User::find(request('id'));
        $user->delete();

        auth()->logout();

        return redirect()->route('welcome');
    }
}
