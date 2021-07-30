<?php 

Class Contacto extends Controller
{

	public function index()
	{
		
		$data = [];
        $data['title'] = 'Contacto';
		$this->view("contacto",$data);
	}


}