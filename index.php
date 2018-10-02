<?php 
session_start();
define('PATH_CONTROLLER',__DIR__.'/controllers/');
define('PATH_APPLICATION',__DIR__.'/site');

if(isset($_GET['controller']) && ucfirst(strtolower($_GET['controller'])) === 'User' && isset($_GET['action']) && $_GET['action'] === 'register'){
	$controller = 'UserController' ;

	$action = 'register';
	require_once(PATH_CONTROLLER.$controller.'.php');
	$controller = new $controller();
	$controller->$action();
}

else if(!isset($_SESSION['loggedin']) && empty($_SESSION['loggedin'])){
	$controller = 'UserController' ;

	$action = 'login';

	require_once(PATH_CONTROLLER.$controller.'.php');
	$controller = new $controller();
	$controller->$action();
} else {
	$controller = isset($_GET['controller']) ? ucfirst(strtolower($_GET['controller'])).'Controller' : 'UserController' ;

	$action = isset($_GET['action']) ? $_GET['action'] : 'login';

	require_once(PATH_CONTROLLER.$controller.'.php');
	$controller = new $controller();
	$controller->$action();
}







 ?>
