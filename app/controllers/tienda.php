<?php 

Class Tienda extends Controller
{

	public function index()
	{
        $Tienda = $this->load_model('tienda_model');
		$data = [];
        $data['title'] = 'tienda';
        $data['tienda'] = $Tienda->get_tienda();
		$this->view("tienda",$data);
	}


}