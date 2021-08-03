<?php 

Class Suplementos extends Controller
{

	public function index()
	{
        $Suplementos = $this->load_model('Suplemento');
        // var_dump($Suplementos->get_suplementos());
        // exit;

		$data = [];
        $data['title'] = 'Suplementos';
		$this->view("suplementos",$data);
	}


}