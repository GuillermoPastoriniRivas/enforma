<?php 

Class Home extends Controller
{

	public function index()
	{

		$User = $this->load_model('User');
		// // $_SESSION['account_id'] = "Pedro";
		// print_r("l");
		//  exit;
		// // $user_data = $User->check_login();

		// // if(is_object($user_data)){
		// // 	$data['user_data'] = $user_data;
		// // }
		$data = [];
		$data['title'] = 'Inicio';
		$this->view("index",$data);
	}


}