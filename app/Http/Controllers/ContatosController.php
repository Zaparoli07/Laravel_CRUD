<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contatos;
use Redirect;

class ContatosController extends Controller
{
    public function index(){

    	$contatos = Contatos::get();

    	return view('contatos.lista', ['contatos' => $contatos]);

    }

    public function novo(){

    	return view('contatos.formulario');

    }

    public function salvar(Request $request){

 		$contato = new Contatos();

    	$contato = $contato->create($request->all());

    	\Session::flash('Sucesso', 'Cliente Cadastrado com Sucesso!');

    	return Redirect::to('contatos/novo');

 	}

 	public function editar($id){

 		$contato = Contatos::findOrFail($id);

 		return view('contatos.formulario', ['contato' => $contato]);

 	}

 	public function atualizar($id, Request $request) {

 	 	$contato = Contatos::findOrFail($id);

 	 	$contato->update($request->all());

 	 	\Session::flash('Sucesso', 'Cliente Atualizado com Sucesso!');

 	 	return Redirect::to('contatos/'.$contato->id.'/editar');

 	}

 	public function deletar($id){

 		$contato = Contatos::findOrFail($id);

 		$contato->delete();

 		\Session::flash('Sucesso', 'Deletado com Sucesso!');

 		return Redirect::to('contatos/');
 	 	
 	}
}
