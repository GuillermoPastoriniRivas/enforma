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


}