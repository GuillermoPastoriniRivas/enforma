<?php 

Class Rutinas
{
    public function get_rutinas()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from rutinas");
	}

	public function add_rutinas($data) {

		$arr['tipo'] = $data->tipo;
		$arr['imagenes'] = $data->imagenes;
		$arr['id_rutinas'] = $data->id_rutinas;
		$arr['nivel_dificultad'] = $data->nivel_dificultad;

		if(!is_string($arr['tipo']))
		{
			return false;
		}

		$DB = Database::newInstance();

		$query = "INSERT INTO rutinas (tipo, id_rutinas, imagenes, nivel_dificultad) VALUES (:tipo, :id_rutinas, :imagenes, :nivel_dificultad)";
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
		$query="DELETE FROM rutinas WHERE id_rutinas = :id";
		$check = $DB->write($query,$arr); 
		if ($check) {
			return true;
		} else {
			return false;
		}
	}
}