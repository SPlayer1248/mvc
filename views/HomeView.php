<?php 

if(!$_SESSION['loggedin']){
	header('location: index.php?action=login');
}

class HomeView
{
	
	public function listAllServers($servers)
	{
		require_once('templates/home.php');
		print_r($servers);
	}
}
 ?>