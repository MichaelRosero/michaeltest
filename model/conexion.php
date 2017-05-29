<?php  
 //select.php  
 $connect = mysqli_connect("localhost", "root", "root", "ideasplus");  
 $data = json_decode(file_get_contents("php://input"));  
 ?>  