<?php if ( ! defined('PATH_CONTROLLER')) die ('Bad request!');

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
			$filename = $ip.'.xml';
			$cmd = 'nmap -v -O -oX '.$filename.' '.$ip;
			// echo $cmd;
			// shell_exec($cmd);
			// echo $filename;
			$scanModel = new ScanModel();
			$scanModel->getDataFromFile($filename);
			// echo file_get_contents($filename);
		}
	}

	public function scanAll(){

	}
}
?>