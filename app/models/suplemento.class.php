<?php 

Class Suplemento 
{
    public function get_suplementos()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from suplementos");
	}

	public function add_suplemento($data) {

		$arr['titulo'] = $data->titulo;
		$arr['descripcion'] = $data->descripcion;
		$arr['imagen'] = $data->imagen;
		$arr['precio'] = $data->precio;

		if(!is_numeric($arr['precio']))
		{
			return false;
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
}