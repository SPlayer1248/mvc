<?php 

include('controller/result_Controller.php');
$c_result = new resultController();
$content = $c_result->users();
print_r($content);
 ?>