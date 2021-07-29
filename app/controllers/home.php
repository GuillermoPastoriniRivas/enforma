<?php 

Class Home extends Controller
{

	public function index()
	{
		
		
		$User = $this->load_model('User');
		$user_data = $User->check_login();

		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}
		$data = [];
		$this->view("index",$data);
	}


}