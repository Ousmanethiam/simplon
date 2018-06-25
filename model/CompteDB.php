<?php
class CompteDB extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($idclient, $numero, $solde)
	{
		$sql = "INSERT INTO compte VALUES(NULL, '$idclient', '$numero', '$solde')";
		
		if($this->db !=null)
		{
			return $this->db->exec($sql);
		}
		else{
			return null;
		}
	}
}
?>