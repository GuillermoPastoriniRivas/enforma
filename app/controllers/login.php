<?php 

Class Login extends Controller
{

	public function index()
	{
		$data['title'] = 'Login';

		if (isset($_SESSION['id_user'])) {
			if($_SESSION['isAdmin'] == 1) {
				header(("Location: " . ROOT . 'admin'));
			} else {
				header(("Location: " . ROOT ));
			}
		} else {
			$this->view("login",$data);
		} 
		
	}

	public function login() {
		if(count($_POST) > 0){
			$data = (object)$_POST;
		}else{
			$data = file_get_contents("php://input");
			$data = json_decode($data);
		}
		$user = $this->load_model("User");
		$usuario = $user->get_user($data->email);
		
		if($usuario) {
			if (password_verify($data->password, $usuario->password)) {
				$_SESSION['id_user'] = $usuario->id_user;
				$_SESSION['nombre'] = $usuario->nombre;
				$_SESSION['email'] = $usuario->email;
				$_SESSION['celular'] = $usuario->celular;
				$_SESSION['isAdmin'] = $usuario->isAdmin;
				$this->index();
			} else {
				echo 'La contraseña no es válida.';
			}
		} else {
			$this->index();
		}
	}

}