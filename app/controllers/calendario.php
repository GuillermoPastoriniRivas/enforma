<?php 

Class Calendario extends Controller
{

	public function index()
	{
         
        

		$data = [];
        $data['title'] = 'Calendario';
       
		$this->view("calendario",$data);
	}


}