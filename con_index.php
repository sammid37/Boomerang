<?php
	include "conexao.php";
	
  $Nome_Obj = $_POST['Nome_Obj'];
	$Desc_Obj = $_POST['Desc_Onj'];
	$Local_Obj = $_POST['Local_Obj'];
	$Armazenamento = $_POST['Armazenamento'];
	$DataP = $_POST['DataP'];

	$query = "INSERT INTO Objeto('Nome_Obj','Desc_Obj','Local_Obj','Armazenamento','Data_P') 
	VALUES ('$Nome_Obj','$Desc_Obj','$Local_Obj','$Armazenamento','$DataP');"; 

	$run = mysqli_query($con,$query);
?>