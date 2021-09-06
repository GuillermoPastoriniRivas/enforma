<?php 

Class Rutinas extends Controller
{

	public function index()
	{
        $Rutinas = $this->load_model('Rutina');
		$data = [];
        $data['title'] = 'Rutinas';
        $data['rutinas'] = $Rutinas->get_rutinas();
		$this->view("rutinas",$data);
	}


}