<?php 

$action = $_GET['action'];

include('controllers/ResultController.php');
$resultController = new ResultController();

if($action == 'list'){
	$resultController->getResult();	
}

if($action == 'add'){
	$resultController->formRegister();	
}

if($action == 'doAdd'){

	$resultController->doAdd();
}

// https://www.youtube.com/watch?v=H2L-x-jjM8Y&index=12&list=PLR8iDMjPjgZ1zwjFApMJQknRla1nvEioy


 ?>
