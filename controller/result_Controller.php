<?php  

include('model/result_Model.php');
class resultController
{
	
	public function users(){
		$result_model = new resultModel();
		$user = $result_model -> getUsers();
		return array('user'=>$user);
	}
}
?>