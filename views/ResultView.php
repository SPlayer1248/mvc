<?php 

/**
* 
*/
class ResultView
{
	
	public function showAllUsers($users)
	{
		require_once('templates/result.php');
		echo 'all users';
		print_r($users);
	}

	public function formRegister(){
		require_once('templates/formregister.php');
	}
}
 ?>