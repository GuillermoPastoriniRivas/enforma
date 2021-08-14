<?php 

Class Admin extends Controller
{

	public function index()
	{
		$Suplementos = $this->load_model('Suplemento');
		$data = [];
        $data['title'] = 'Admin';
        $data['suplementos'] = $Suplementos->get_suplementos();
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
}