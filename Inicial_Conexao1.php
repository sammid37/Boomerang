<?php
	include "Squid_Conexao.php";
	session_start();
		$Obj = $_POST['Obj'];
		$Matricula = $_SESSION['Matricula'];
    $Nome_Dono = $_POST['Nome_Dono'];
    $Mat_Dono = $_POST['Mat_Dono'];
    $Data_Dev = $_POST['Data_Dev'];
		
	$query = 
	"INSERT INTO 
	Objeto_Devolvido(
		Obj,
		Matri_User,
		Nome_Dono,
		Mat_Dono,
		Data_Dev
	)
	VALUES 
	(
		'$Obj',
		'$Matricula',
		'$Nome_Dono',
		'$Mat_Dono',
		'$Data_Dev'
	);";
	
	echo $query;
	$run = mysqli_query($con,$query);
	
	if($run){
    echo "<h5>Devolvido com sucesso</h5>";
  } else{

    echo "<h5>Falha ao devolver</h5>";
  }
	

?>
