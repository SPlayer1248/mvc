<?php 
session_start();
define('PATH_CONTROLLER',__DIR__.'/controllers/');
define('PATH_APPLICATION',__DIR__.'/site');

$controller = isset($_GET['controller']) ? ucfirst(strtolower($_GET['controller'])).'Controller' : 'UserController' ;

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

require_once(PATH_CONTROLLER.$controller.'.php');
$controller = new $controller();
$controller->$action();

// $resultController = new ResultController();
// require_once('controllers/UserController.php');
// $userController = new UserController();
// $userController->$action();

// if($action == 'list'){
// 	$resultController->getResult();	
// }

// if($action == 'add'){
// 	$resultController->formRegister();	
// }

// if($action == 'doAdd'){

// 	$resultController->doAdd();
// }

// if($action == 'login'){
// 	$userController->formLogin();
// }

// if($action == 'doLogin'){
// 	$userController->login();
// }

// https://www.youtube.com/watch?v=H2L-x-jjM8Y&index=12&list=PLR8iDMjPjgZ1zwjFApMJQknRla1nvEioy


 ?>
