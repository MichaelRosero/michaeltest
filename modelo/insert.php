 <?php  
 //insert.php  
$connect = mysqli_connect("localhost", "root", "root", "ideasplus");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
     
      $nombre = mysqli_real_escape_string($connect, $data->nombre);       
      $apellido = mysqli_real_escape_string($connect, $data->apellido);  
       $documento = mysqli_real_escape_string($connect, $data->documento);  
       $tipodocumento = mysqli_real_escape_string($connect, $data->tipodocumento);  
       $email = mysqli_real_escape_string($connect, $data->email);  
      $tipouser = mysqli_real_escape_string($connect, $data->tipouser);  
   //   $estado = mysqli_real_escape_string($connect, $data->estado);  
      $genero = mysqli_real_escape_string($connect, $data->genero);  
      $fechanacimiento = mysqli_real_escape_string($connect, $data->fechanacimiento);  
      $contrasena = mysqli_real_escape_string($connect, $data->contrasena); 
      $telefono = mysqli_real_escape_string($connect, $data->telefono ); 
      $celular= mysqli_real_escape_string($connect, $data->celular); 

      $query = "INSERT INTO tb_usuario(NOMBRE, APELLIDO,DOCUMENTO, TIPO_DOCUMENTO,CORREO, ID_ROL,ID_ESTADO, GENERO,FECHA_NACIMIENTO, CONTRASENA, TELEFONO, CELULAR) VALUES ('$nombre', '$apellido','$documento', '$tipodocumento','$email', '$tipouser','2', '$genero','$fechanacimiento', '$contrasena','$telefono', '$celular')";  
     
      if(mysqli_query($connect, $query))  
      {  
       echo "Data Inserted...";  
      }  
      else  
      {  
     echo   'Error';  
      }  
 }



 ?>  