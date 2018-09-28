<?php
	class ResultModel {
		public function getAllResults(){
			
			require_once('Database.php');
			$db = new Database();
			$sql = 'SELECT * FROM results';
			$result= $db->execute($sql);
			$reports = array();

			if($result->num_rows > 0){
				while ($report = mysqli_fetch_assoc($result)) {
					$reports[] = $report;
				}
			}
			print_r($reports);
			return $reports;
		}


		public function addResult($data){
			echo 'test';
		}
	}
?>
