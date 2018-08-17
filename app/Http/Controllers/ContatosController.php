<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contatos;
use Redirect;
use PHPMailer\PHPMailer\PHPMailer;

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

		$email = $request->input('email');

		$this -> sendEmail($email);

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

	public function sendEmail($email) {

		$Mailer = new PHPMailer();

		//SMTP
		$Mailer -> IsSMTP();

		//Configuração Carácteres
		$Mailer -> Charset = 'UTF-8';

		//Enviar E-mail em HTML
		$Mailer -> isHTML(true);

		//Configurações
		$Mailer -> SMTPAuth = true;
		$Mailer -> SMTPSecure = 'tls';

		//Nome do Servidor
		$Mailer -> Host = 'smtp.mailtrap.io';
		$Mailer -> Username = 'fc4a0d260cdac2';
		$Mailer -> Password = '882f6026837d56';
		$Mailer -> Port = 465;

		//E-mail Remetente
		$Mailer -> From = 'luizzaparoli07@gmail.com';

		//Nome do Remetente
		$Mailer -> FromName = 'Luiz Zaparoli';

		//Assunto da Mensagem
		$Mailer -> Subject = 'Projeto Tray';

		//Corpo da Mensagem
		$Mailer -> Body = 'Sejá Bem-Vindo(a) à minha Lista de Contatos ;D';

		//Corpo da Mensagem em Texto
		$Mailer -> AltBody = 'Conteúdo do E-mail em Text';

		//Destinatário
		$Mailer -> addAddress($email);

		if($Mailer -> Send()){

			echo "E-mail enviado com sucesso";

		}else{

			echo "Erro no envio" . $Mailer -> ErrorInfo;

		}
	}
}
