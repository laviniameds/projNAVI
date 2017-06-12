<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function __construct ()
	{
		$this->middleware('auth');
	}

    public function index ()
    {
    	return view ('users.index');
    }

    public function edit ()
    {
    	return view ('users.edit');
    }

    public function update ()
    {
        $this->validate(request(), [
            'nome' => 'required'
            , 'email' => 'required|email'
            , 'cpf' => 'required|regex:([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})'
            , 'rg' => 'required|regex:([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[A-Za-z0-9]{1})'
            , 'nasc' => 'required'
            , 'genero' => 'required'
            , 'rua' => 'required'
						, 'numero' => 'required'
						, 'tipo' => 'required'
            , 'bairro' => 'required'
            , 'cidade' => 'required'
						, 'complemento' => 'required'
            , 'estado' => 'required|max:2'
            , 'cep' => 'required|regex:([0-9]{5}[\-]?[0-9]{3})'
            ]);

        $user = User::find(request('id'));

        $user->update([
            'nome' => request('nome')
            , 'email' => request('email')
            , 'cpf' => request('cpf')
            , 'rg' => request('rg')
            , 'nasc' => request('nasc')
            , 'genero' => request('genero')
						, 'tipo' => request('tipo')
            , 'rua' => request('rua')
						, 'numero' => request('numero')
            , 'bairro' => request('bairro')
            , 'cidade' => request('cidade')
            , 'estado' => request('estado')
            , 'cep' => request('cep')
						, 'complemento' => request('complemento')
            ]);

      return redirect()->home();
    }

    public function destroy ()
    {
        $user = User::find(request('id'));
        $user->delete();

        auth()->logout();

        return redirect()->route('welcome');
    }
}
