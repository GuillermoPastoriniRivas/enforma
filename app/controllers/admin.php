<?php 

Class Admin extends Controller
{

	public function index()
	{
		$data['page_title'] = "Administracion";
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
 			
			$user = $this->load_model("User");
			$user->login($_POST);
		}

		$this->view("admin",$data);
	}


}