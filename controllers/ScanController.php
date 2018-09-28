<?php 

/**
 * 
 */
require_once('models/ScanModel.php');
class ScanController
{
	
	public function scan()
	{
		if(isset($_GET['ip']) && !empty($_GET['ip'])){
			$ip = $_GET['ip'];
			$cmd = 'nmap -v -O -oG '.$ip;
			shell_exec($cmd);
			echo file_get_contents($ip);
		}
	}

	public function scanAll(){

	}
}
?>