<?php
	class ResultModel {
		public function getResult(){
			$conn = mysqli_connect('localhost','root','','mvc');
			mysqli_set_charset($conn, 'utf8');
			if(mysqli_connect_errno()) {
				echo 'Connect error: '.mysqli_connect_error();
			}
			$sql = 'SELECT * FROM users';
			$result = $conn->query($sql);

			$users = array();

			if($result->num_rows > 0){
				while ($user = mysqli_fetch_assoc($result)) {
					$users[] = $user;
				}
			}

			return $users;
		}


		public function addUser($data){
			echo 'test';
		}
	}
?>
