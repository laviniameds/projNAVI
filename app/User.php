<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
      'nome',
      'cpf',
      'rg',
      'nasc',
      'genero',
      'tipo',
      'rua',
      'bairro',
      'cidade',
      'complemento',
      'numero',
      'estado',
      'cep',
      'email',
      'password'
=======
      'nome'
      ,'cpf'
      ,'rg'
      ,'nasc'
      ,'genero'
      ,'tipo'
      ,'rua'
      ,'complemento'
      ,'numero'
      ,'bairro'
      ,'cidade'
      ,'estado'
      ,'cep'
      ,'email'
      ,'password'
>>>>>>> alteracoes
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
