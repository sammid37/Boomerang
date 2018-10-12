<?php
	//session_start();

	include "Squid_Conexao.php";

		$Nome_ObjDev = $_POST['Nome_ObjDev'];
    $Nome_Dono = $_POST['Nome_Dono'];
		$ID_ObjDev = 1;
    $Matricula_Dono = $_POST['Matricula_Dono'];
    $Data_Dev = $_POST['Data_Dev'];
		// $Matricula = $_SESSION['Matricula']
	$query = "insert into Objeto_Devolvido(`ID_ObjDev`,`ID_Obj`,`Matricula_D`,`Nome_ObjDev`,`Nome_Dono`,`Matricula_Dono`,`Data_Dev`) values ('1','1','1','$Nome_ObjDev','$Nome_Dono','$Matricula_Dono','$Data_Dev');";
	// $query = "INSERT INTO Objeto_Devolvido('ID_Obj','Matricula_D','Nome_Obj','Nome_Dono', 'Matricula_Dono','Data_Dev') VALUES ('1',$Matricula,$Nome_ObjDev,$Nome_Dono,$Matricula_Dono,$Data_Dev)";
	$run = mysqli_query($con,$query);

?>
