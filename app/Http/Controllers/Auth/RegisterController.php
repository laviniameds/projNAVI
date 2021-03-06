<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'cpf' => 'required|regex:([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})|unique:users',
            'rg' => 'required|regex:([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3})|unique:users',
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
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'nasc' => $data['nasc'],
            'genero' => $data['genero'],
            'rua' => $data['rua'],
            'tipo' => $data['tipo'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'],
            'bairro' => $data['bairro'],
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'cep' => $data['cep'],
        ]);
    }
}
