<?php 

Class Tienda extends Controller
{

	public function index()
	{
        // $Tienda = $this->load_model('Tienda');
		$data = [];
        $data['title'] = 'Tienda';
        $data['vestimenta'] = [];//$Tienda->get_Tienda();
		$this->view("Tienda",$data);
	}


}