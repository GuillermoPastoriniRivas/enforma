<?php 

Class Vestimenta extends Controller
{

	public function index()
	{
        $Vestimenta = $this->load_model('Vestimenta');
		$data = [];
        $data['title'] = 'Vestimenta';
        $data['vestimenta'] = $Vestimenta->get_vestimenta();
		$this->view("vestimenta",$data);
	}


}