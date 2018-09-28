<?php 

require_once('Database.php');
class UserModel extends Database{

	public function register($username, $password){
		$conn = $this->getConnection();
		$sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
		$result=$this->execute($sql);

		return $result;	
	}

	public function login($username, $password){

		$conn = $this->getConnection();
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result= $this->execute($sql);
		return $user = mysqli_fetch_assoc($result);
	}

}

?>
