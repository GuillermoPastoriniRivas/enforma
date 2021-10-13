<?php 

Class Suplemento 
{
    public function get_suplementos()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from suplementos");
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
	public function add_suplemento($data, $FILES) {
		
		$arr['titulo'] = $data->titulo;
		$arr['descripcion'] = $data->descripcion;
		$arr['precio'] = $data->precio;

		if(!is_numeric($arr['precio']))
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

		$query = "INSERT INTO suplementos (titulo, descripcion, imagen, precio) VALUES (:titulo, :descripcion, :imagen, :precio)";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}

	public function eliminar_suplemento($id) {
		$DB = Database::newInstance();
		$arr['id'] = $id;
		$query="DELETE FROM suplementos WHERE id_suplementos = :id";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}

	public function update_suplemento($data) {
		$arr['titulo'] = $data->titulo;
		// $arr['imagen'] = $data->imagen;
		$arr['precio'] = $data->precio;
		$arr['descripcion'] = $data->descripcion;
		$arr['id_suplementos'] = $data->id_suplementos;
		if(!is_string($arr['titulo']))
		{
			return false;
		}
		$DB = Database::newInstance();
		$query = "UPDATE suplementos SET titulo = :titulo, precio = :precio, descripcion = :descripcion WHERE id_suplementos = :id_suplementos";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}

}