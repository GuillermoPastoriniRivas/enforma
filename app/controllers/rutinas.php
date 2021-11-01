<?php 

Class Rutinas extends Controller
{

	public function index()
	{
        $Rutinas = $this->load_model('Rutina');
		$data = [];
        $data['title'] = 'Rutinas';
        $data['rutinas'] = $Rutinas->get_rutinas();
		if (!isset($_SESSION['id_user'])) {
			header(("Location: " . ROOT.'login' ));
			die;
		} 
		$this->view("rutinas",$data);
	}


}