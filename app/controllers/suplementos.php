<?php 

Class Suplementos extends Controller
{

	public function index()
	{
        $Suplementos = $this->load_model('Suplemento');
        print_r($Suplementos);
        exit;

		$data = [];
        $data['title'] = 'Suplementos';
		$this->view("suplementos",$data);
	}


}