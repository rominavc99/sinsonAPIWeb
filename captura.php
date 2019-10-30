<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('DESKTOP-CMIVFJU\SQLEXPRESS','sinsons','1234');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('db_simpsons');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['name'];
	$segundonombre=$_POST['secondname'];
    $apellido=$_POST['lastname'];
    $edad=$_POST['age'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$name',
								   '$secondname',
                                   '$lastname',
								   '$age')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>