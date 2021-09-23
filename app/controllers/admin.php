<?php 


Class Admin extends Controller
{

	public function index()
	{
		//enviar_email();
		$Suplementos = $this->load_model('Suplemento');
		$Rutinas = $this->load_model('Rutina');
		$data = [];
        $data['title'] = 'Admin';
        $data['suplementos'] = $Suplementos->get_suplementos();
		$data['rutinas'] = $Rutinas->get_rutinas();
		$this->view("admin",$data);
	}

	
	public function agregarSuplemento() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		$Suplementos = $this->load_model('Suplemento');
		$res = $Suplementos->add_suplemento($data);
		header(("Location: " . ROOT . "admin"));
	}
	public function agregarRutina() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		
		$Rutina = $this->load_model('Rutina');
		$res = $Rutina->add_rutinas($data);
		header(("Location: " . ROOT . "admin"));
	}
	public function eliminarSuplemento() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		$Suplementos = $this->load_model('Suplemento');
		$res = $Suplementos->eliminar_suplemento($data->id);
		return $res;
	}
	public function eliminarRutina() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		$Rutina = $this->load_model('Rutina');
		$res = $Rutina->eliminar_rutinas($data->id);
		return $res;
	}
	public function actualizarSuplemento() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		$Suplementos = $this->load_model('Suplemento');
		$res = $Suplementos->update_suplemento($data);
		header(("Location: " . ROOT . "admin"));
	}
	public function actualizarRutina() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		$Rutina = $this->load_model('Rutina');
		$res = $Rutina->update_rutinas($data);
		header(("Location: " . ROOT . "admin"));
	}
}