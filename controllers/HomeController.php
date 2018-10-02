<?php 
if ( ! defined('PATH_CONTROLLER')) die ('Bad request!');



require_once('models/HomeModel.php');
class HomeController {

	public function listAllServers(){
		$homeModel = new HomeModel();
		$servers = $homeModel->listAllServers();
		
		if($servers){
			require_once('views/HomeView.php');
			$homeView = new HomeView();
			$homeView->listAllServers($servers);
		}
	}

	public function manager(){
		
	}
}
?>
