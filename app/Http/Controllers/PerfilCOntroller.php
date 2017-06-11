<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilCOntroller extends Controller
{
  public function index()
  {
      return view('perfil/infos');
  }
}
