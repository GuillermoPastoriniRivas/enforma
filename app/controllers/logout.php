<?php 

Class Logout extends Controller
{

	public function index()
	{
		$User = $this->load_model('User');
		session_destroy();
		header("Location: " . ROOT );
		die;
	}


}