<?php
class Compte extends Controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/CompteDB.php';
	}
	public function index()
	{
      return $this->view->load('compte/index');
	}
	public function add()
	{
		$comptedb = new CompteDB();
		$comptedb->add("11sn", "177", "145");
		return $this->view->load('compte/add');
	}
}
?>