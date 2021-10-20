<?php 

Class User 
{
	private $error = "";

	public function signup($datos)
	{
		$arr['nombre'] = $datos->nombre;
		$arr['email'] = $datos->email;
		$arr['celular'] = $datos->celular;
		$arr['password'] = password_hash($datos->password, PASSWORD_DEFAULT);

		$DB = Database::newInstance();

		$query = "INSERT INTO users (nombre, email, celular, password) 
					VALUES (:nombre, :email, :celular, :password)";
		$check = $DB->write($query,$arr); 

		if ($check) {
			return true;
		} else {
			return false;
		}
	}

	public function login($datos)
	{
		
	}

	public function get_user($email)
	{
		$DB = Database::newInstance();
		$query = "SELECT * FROM users WHERE email = :email LIMIT 1";
		$arr['email'] = $email;
		$result = $DB->read($query,$arr);
		if(isset($result[0])) {
			return $result[0];
		} else {
			return false;
		}
		
	}

	public function check_login()
	{

	}

	public function logout()
	{

	}


}