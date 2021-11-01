<?php 

Class Home extends Controller
{

	public function index()
	{
		$User = $this->load_model('User');
		$data = [];
		$data['title'] = 'Inicio';
		$this->view("index",$data);
	}


}