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
		$arr['id_rutina'] = $data->id_rutina;
		$arr['dificultad'] = $data->dificultad;
		$arr['descripcion'] = $data->descripcion;

		if(!is_string($arr['titulo']))
		{
			return false;
		}

		$DB = Database::newInstance();

		$query = "INSERT INTO rutinas (titulo, id_rutina, imagen, dificultad, descripcion) VALUES (:titulo, :id_rutina, :imagen, :dificultad, :descripcion)";
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