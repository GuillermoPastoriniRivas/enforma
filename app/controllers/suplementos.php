<?php 

Class Suplementos extends Controller
{

	public function index()
	{
        $Suplementos = $this->load_model('Suplemento');
		$data = [];
        $data['title'] = 'Suplementos';
        $data['suplementos'] = $Suplementos->get_suplementos();
		$this->view("suplementos",$data);
	}

	public function enviar_reserva_mail() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}

		$contacto=$data->celular;
		$asunto='Reserva de Suplemento';
		$mensaje= $data->name." Cel:".$data->celular." Dir:". $data->direccion." Producto:".$data->titulo." ID:".$data->id;
		$nombre=$data->name;
		
		$res = enviar_email($contacto, $asunto, $mensaje, $nombre);
		header(("Location: " . ROOT . ""));
	}
}