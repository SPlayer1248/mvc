<?php 

require_once('models/ServerModel.php');
class ServerController {

	public function listAll(){
		$serverModel = new ServerModel();
		$servers = $serverModel->listAll();
		
		if($servers){
			require_once('views/ServerView.php');
			$serverView = new ServerView();
			$serverView->listAll($servers);
		}
	}

	public function listServers(){
		$user = $_SESSION['user'];
		$serverModel = new ServerModel();
		$servers = $serverModel->listServers($user);
		
		if($servers){
			require_once('views/ServerView.php');
			$serverView = new ServerView();
			$serverView->listServer($servers);
		}
	}

	public function edit(){
		$user = $_SESSION['user'];
		$ip = $_GET['ip'];
		$serverModel = new ServerModel();
		$result = $serverModel->edit($ip,$user);

		if($result){
			require_once('views/ServerView.php');
			$serverView = new ServerView();
			$serverView->listServer($servers);
			echo 'Edit successed';
		} else {
			require_once('views/ServerView.php');
			$serverView = new ServerView();
			$serverView->listServer($servers);
			echo 'Edit failed';
		}
	}
}
?>