<?php
class ClientDB extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($nom, $prenom, $adresse)
	{
		$sql = "INSERT INTO client VALUES(NULL, '$nom', '$prenom', '$adresse')";
		
		if($this->db !=null)
		{
			return $this->db->exec($sql);
		}
		else{
			return null;
		}
	}
	public function liste()
	{
		$sql = "SELECT * FROM client";
		if($this->db != null)
		{
			return $this->db->query($sql)->fetschAll();
		}else{
			return null;
		}
	}
}
?>