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


}