<?php 

/**
* 
*/
class ResultView
{
	
	public function showAllReports($reports)
	{
		require_once('templates/result.php');
		echo 'all servers';
		print_r($reports);
	}

	public function formRegister(){
		require_once('templates/formregister.php');
	}
}
 ?>