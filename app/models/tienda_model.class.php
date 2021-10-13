<?php 

Class Tienda_model 
{
    public function get_tienda()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from vestimenta");
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

	public function add_tienda($data, $FILES) {

		$arr['titulo'] = $data->titulo;
        $arr['sexo'] = $data->sexo;
		$arr['descripcion'] = $data->descripcion;
		$arr['precio'] = $data->precio;
        $arr['talle'] = $data->talle;

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

		$query = "INSERT INTO vestimenta (titulo, sexo, descripcion, imagen, precio, talle) VALUES (:titulo, :sexo, :descripcion, :imagen, :precio, :talle)";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}

	public function eliminar_tienda($id) {
		$DB = Database::newInstance();
		$arr['id'] = $id;
		$query="DELETE FROM vestimetna WHERE id_vestimenta = :id";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}

	public function update_vestimenta($data) {
        $arr['titulo'] = $data->titulo;
        $arr['sexo'] = $data->sexo;
		$arr['descripcion'] = $data->descripcion;
		$arr['imagen'] = $data->imagen;
		$arr['precio'] = $data->precio;
        $arr['talle'] = $data->talle;
        $arr['id_vestimenta'] = $data->id_vestimenta;

		if(!is_string($arr['titulo']))
		{
			return false;
		}
		$DB = Database::newInstance();
		$query = "UPDATE vestimenta SET titulo = :titulo, sexo = :sexo, precio = :precio, descripcion = :descripcion, talle = :talle WHERE id_suplementos = :id_suplementos";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}

}