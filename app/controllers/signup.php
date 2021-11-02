<?php 

Class Signup extends Controller
{

	public function index()
	{

		$data['title'] = 'Registro';

		if (isset($_SESSION['id_user'])) {
			header(("Location: " . ROOT ));
		} 
		$this->view("signup",$data);
	}

	public function registro() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		$user = $this->load_model("User");
		$res = $user->signup($data);
		if($res) {
			$usuario = $user->get_user($data->email);
			$_SESSION['id_user'] = $usuario->id_user;
			$_SESSION['nombre'] = $usuario->nombre;
			$_SESSION['email'] = $usuario->email;
			$_SESSION['celular'] = $usuario->celular;
			$_SESSION['isAdmin'] = $usuario->isAdmin;
			$this->index();
		} else {
			$this->index();
		}
	}


}