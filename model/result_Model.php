<?php
	include('database.php');
	class resultModel extends database
	{
		function getUsers(){
			$sql = "SELECT * FROM users";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}

	}	
?>
