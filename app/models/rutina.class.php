<?php 

Class Rutina
{
    public function get_rutinas()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from rutinas");
	}

	public function add_rutinas($data) {

		$arr['titulo'] = $data->titulo;
		$arr['imagen'] = $data->imagen;
		$arr['descripcion'] = $data->descripcion;

		if(!is_string($arr['titulo']))
		{
			return false;
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