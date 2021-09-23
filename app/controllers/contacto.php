<?php 

Class Contacto extends Controller
{

	public function index()
	{
		
		$data = [];
        $data['title'] = 'Contacto';
		$this->view("contacto",$data);
	}



	public function enviar_mail_contacto(){

		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}

		$email=$data->email;
		$asunto=$data->subject;
		$mensaje=$data->message;
		$nombre=$data->name;
		
		$res = enviar_email($email, $asunto, $mensaje, $nombre);
		header(("Location: " . ROOT . ""));
	}
}
?>