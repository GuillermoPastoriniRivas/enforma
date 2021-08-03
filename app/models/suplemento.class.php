<?php 

Class Suplemento 
{
    public function get_suplementos()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from suplementos");
	}

}