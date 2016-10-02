<?php

$connect=mysqli_connect("mysql.hostinger.es","u906430108_u","4QYzSiq7","u906430108_quiz");
if ($connect) {

		echo "conexion exitosa. <br />";
	
		$nombre=$_POST[nombre];
		$apellidos=$_POST[apellidos];
		$email=$_POST[email];
		$password=$_POST[password];
		$telefono=$_POST[telefono];
		$especialidad=$_POST[especialidad];
		
		$sql="INSERT INTO Usuario (Nombre,Apellidos,Email,Password,Telefono,Especialidad) VALUES ('$nombre','$apellidos','$email','$password','$telefono','$especialidad')";
		
		if(!mysqli_query($connect,$sql)){
		
			die('Error: ' .mysqli_error($connect));
		}
		else{
			echo " 1 fila introducida. <br />";
		}
		
		echo "<a href='http://uherederosw1617.hol.es/lab4/verUsuarios.php'>Ver datos de la BD</a>";
}


mysqli_close($connect);

?>

