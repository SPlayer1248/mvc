<?php 

require_once('Database.php');
class ServerModel extends Database
{
	public function listAll(){
		$conn = $this->getConnection();
		$sql = "SELECT * FROM `servers`";
		$result =  $this->execute($sql);
		$rows = array();

		if($result->num_rows > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$rows[] = $row;
				}
			}
		return $rows;
	}

	public function listServers($user) {
		$conn = $this->getConnection();
		$sql = "SELECT * FROM `servers` WHERE owner='$user'";
		$result =  $this->execute($sql);
		$rows = array();

		if($result->num_rows > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$rows[] = $row;
				}
			}
		return $rows;
	}

	public function add($ip, $owner) {
		$conn = $this->getConnection();
		$sql = "INSERT INTO `servers`(`ip`, `owner`) VALUES ('$ip','$owner')";
		$result=$this->execute($sql);

		return $result;
	}

	public function edit($ip, $owner){
		$conn = $this->getConnection();
		$sql = "UPDATE `servers` SET `ip`='$ip' WHERE `owner`='$owner'";
		$result=$this->execute($sql);

		return $result;
	}
}
?>