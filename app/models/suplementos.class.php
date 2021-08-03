<?php 

Class Suplemento 
{
	public $name;
    public function get_suplementos()
	{
		$DB = Database::newInstance();
		return $DB->read("select * from suplementos");
	}

}