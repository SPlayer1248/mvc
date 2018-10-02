<?php if ( ! defined('PATH_CONTROLLER')) die ('Bad request!');

require_once('models/UserModel.php');
class UserController {

	public function register(){
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		require_once('views/RegisterView.php');
		if (!empty($password) && !empty($username)) {
			$userModel = new UserModel();
			$result = $userModel->register($username, $password);
			if($result){
				header('location: index.php?action=login');
				exit();
			} else {
				require_once('views/RegisterView.php');
				echo 'Something went wrong!';
			}
		} else {
			require_once('views/RegisterView.php');
		}
	}

	public function login(){
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		if (!empty($password) && !empty($username)) {
			$userModel = new UserModel();
			$user = $userModel->login($username, $password);
			if($user){
				$_SESSION['user'] = $user['username'];
            	$_SESSION['admin'] = $user['admin'];
            	$_SESSION['loggedin'] = true;
            	if($_SESSION['admin']){
            		header('location: index.php?controller=home&action=manager');
					exit();
            	}
				header('location: index.php?controller=server&action=listServers');
				exit();
			} else {
				require_once('views/LoginView.php');
				echo 'Invalid username or password';
			}
		} else {
			require_once('views/LoginView.php');
		}
	}

	public function logout(){
		session_destroy();
		header('location: index.php?action=login');
		exit();
	}

}
?>