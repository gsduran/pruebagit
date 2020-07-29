<?php 
	$conexion=mysqli_connect('localhost','root','','prueba');

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];


	$sql="INSERT into persona (nombre,apellido)
			values ('$nombre','$apellido')";
	echo mysqli_query($conexion,$sql);
 ?>