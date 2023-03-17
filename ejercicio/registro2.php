<?php
inclide("coneccion");
$con=conectar();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido']
$email = $_POST['email']

$insertar = "INSERTAR INTO cliente (nombre, apellido, email) VALUES ('$nombre','$apellido
 ','$email')";

 $query =mysqli_query($con, $insertar);

 if ($query){
 	header('index.html');
 	exit();
 }else{
 	
 }

?>