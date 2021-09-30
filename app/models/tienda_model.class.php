<?php 

Class Tienda_model 
{
    public function get_tienda()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from vestimenta");
	}

	public function add_tienda($data) {

		$arr['titulo'] = $data->titulo;
        $arr['sexo'] = $data->sexo;
		$arr['descripcion'] = $data->descripcion;
		$arr['imagen'] = $data->imagen;
		$arr['precio'] = $data->precio;
        $arr['talle'] = $data->talle;

		if(!is_numeric($arr['precio']))
		{
			return false;
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