<?php 

if(!$_SESSION['loggedin']){
	header('location: index.php?action=login');
}

class ServerView
{
	
	public function listAll($servers)
	{
		require_once('templates/server.php');
		// print_r($servers);
	}

	public function listServer($servers)
	{
		require_once('templates/server.php');
		// print_r($servers);
	}

	public function addform(){
		require_once('templates/add_server.php');
	}

	public function editform($oldIP){
		require_once('templates/edit_server.php');
	}
}
 ?>