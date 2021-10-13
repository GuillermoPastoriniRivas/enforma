<?php 

Class Rutina
{
    public function get_rutinas()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from rutinas");
	}
	public function generate_filename($length)
	{

		$array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$text = "";

		for($x = 0; $x < $length; $x++)
		{

			$random = rand(0,61);
			$text .= $array[$random];
		}

		return $text;

	}
	
	public function add_rutinas($data, $FILES) {

		$arr['titulo'] = $data->titulo;
		$arr['descripcion'] = $data->descripcion;

		if(!is_string($arr['titulo']))
		{
			return false;
		}
		
		$allowed = array("image/jpeg", "image/png");
		$folder = "assets/enforma/images/";
		$size = 100;
		$size = ($size * 1024 * 1024);

		foreach ($FILES as $key => $img_row) {
			if($img_row['error'] == 0 && in_array($img_row['type'], $allowed)) {
				if($img_row['size'] < $size) {
					$arr['imagen'] = $this->generate_filename(20) . ".". explode("/", $img_row['type'])[1];
					$destination = $folder . $arr['imagen'];
					move_uploaded_file($img_row['tmp_name'], $destination);
				} 
			}
		} 	

		$DB = Database::newInstance();

		$query = "INSERT INTO rutinas (titulo, imagen, descripcion) VALUES (:titulo, :imagen, :descripcion)";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}

		
	}

	public function update_rutinas($data) {
		$arr['titulo'] = $data->titulo;
		// $arr['imagen'] = $data->imagen;
		$arr['descripcion'] = $data->descripcion;
		$arr['id_rutina'] = $data->id_rutina;
		if(!is_string($arr['titulo']))
		{
			return false;
		}
		$DB = Database::newInstance();
		$query = "UPDATE rutinas SET titulo = :titulo,  descripcion = :descripcion WHERE id_rutina = :id_rutina";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}

	public function eliminar_rutinas($id) {
		$DB = Database::newInstance();
		$arr['id'] = $id;
		$query="DELETE FROM rutinas WHERE id_rutina = :id";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}
}