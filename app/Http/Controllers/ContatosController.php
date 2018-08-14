<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    public function index(){

    	return view('contatos.lista');

    }

    public function novo(){

    	return view('contatos.formulario');

    }
}
