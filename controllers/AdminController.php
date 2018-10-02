<?php if ( ! defined('PATH_CONTROLLER')) die ('Bad request!');

if(!isset($_SESSION['admin']) && !$_SESSION['admin']){
	header('location: index.php?controller=server&action=listServers');
	exit();
}

require_once('models/AdminModel.php');

class AdminController 
{
	
	public function listuser()
	{
		$adminModel = new AdminModel();
		$users = $adminModel->listusers();

		require_once('')
	}
}
?>