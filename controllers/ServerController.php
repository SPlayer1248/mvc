<?php if ( ! defined('PATH_CONTROLLER')) die ('Bad request!');
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
		} else {
			$servers = '';
			require_once('views/ServerView.php');
			$serverView = new ServerView();
			$serverView->listServer($servers);
		}
	}

	public function getIPFromFile($file){
		$fileContent = file_get_contents($file);
		
		$IPList = explode("\r\n", $fileContent);

		return $IPList;

	}

	public function add(){
		$user = $_SESSION['user'];
		if(isset($_POST['ip']) && !empty($_POST['ip'])){
			$ip = $_POST['ip'];
			$serverModel = new ServerModel();
			$result = $serverModel->add($ip,$user);
			$servers = $serverModel->listServers($user);

			if($result){
				require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->listServer($servers);
				echo 'Add successed';
			} else {
				require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->listServer($servers);
				echo 'Add failed';
			}
		} 
		elseif (isset($_FILES['fileIP']['tmp_name'])) {
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
		    $mime = finfo_file($finfo, $_FILES['fileIP']['tmp_name']);
		   

		    if ($mime == 'text/plain') {
		        $IPList = $this->getIPFromFile($_FILES['fileIP']['tmp_name']);
		        $serverModel = new ServerModel();
				$servers = $serverModel->listServers($user);			
		        foreach ($IPList as $ip) {
		        	$result = $serverModel->add($ip,$user);

		        	if(!$result){
		        		echo 'Server: '.$ip.' failed to add';
		        	}
		        }
		        $servers = $serverModel->listServers($user);	
		        require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->listServer($servers);
				echo 'Add successed';
    		} else {
    			require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->addform();
    			echo 'Only accept text file';
    		}
    		finfo_close($finfo);
			
		}
		else {
				require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->addform();
			}
		}
	


	public function edit(){
		$user = $_SESSION['user'];
		if (isset($_GET['ip']) && !empty($_GET['ip'])) {
				$oldIP = $_GET['ip'];
		}

		if(isset($_POST['newIP']) && !empty($_POST['newIP'])){
			$newIP = $_POST['newIP'];
			$serverModel = new ServerModel();
			$result = $serverModel->edit($oldIP, $newIP,$user);
			$servers = $serverModel->listServers($user);

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
		} else {
			
				require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->editform($oldIP);
			}
		}

	public function delete(){
		if (isset($_GET['ip']) && !empty($_GET['ip'])) {
			$ip = $_GET['ip'];
			$user = $_SESSION['user'];
			$serverModel = new ServerModel();
			$result = $serverModel->delete($ip, $user);
			$servers = $serverModel->listServers($user);

			if($result){
				require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->listServer($servers);
				echo 'Delete successed';
			} else {
				require_once('views/ServerView.php');
				$serverView = new ServerView();
				$serverView->listServer($servers);
				echo 'Delete failed';
			}
		}
	}
}
		

?>