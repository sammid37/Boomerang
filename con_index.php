<?php

	include "Squid_Conexao.php";
	
    $Nome_Obj = $_POST['Nome_Obj'];
	$Local_Obj = $_POST['Local_Obj'];
	$Data = $_POST['Data'];

	$query = "insert into Objeto(`Nome_Obj`,`Local_Obj`,`Data`) values ('$Nome_Obj','$Local_Obj','$Data');"; 
	
	
	$run = mysqli_query($con,$query);
	
?>