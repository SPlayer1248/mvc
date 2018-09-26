<?php  

class ResultController {
	public function getResult(){
		require_once('models/ResultModel.php');
		$resultModel = new ResultModel();
		$users = $resultModel->getResult();

		require_once('views/ResultView.php');
		$resultView = new ResultView();
		$resultView->showAllUsers($users);
	}

	public function formRegister(){
		require_once('views/ResultView.php');
		$resultView = new ResultView();
		$resultView->formRegister();
	}

	public function doAdd(){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = array(
		'username' => $username,
		'password' => $password, 
		);

		require_once('models/ResultModel.php');
		$resultModel = new ResultModel();
		$resultModel->addUser($data);
	}
}
?>