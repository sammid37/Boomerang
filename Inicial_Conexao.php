<?php
	include_once "Squid_Conexao.php";

  $Nome_Obj = $_POST['Nome_Obj'];
	$Local_Obj = $_POST['Local_Obj'];
	$Data = $_POST['Data'];


	$query = "insert into Objeto(`Nome_Obj`,`Local_Obj`,`Data`) values ('$Nome_Obj','$Local_Obj','$Data');";


	$run = mysqli_query($con,$query);
?>
<a href="tela_index.php">Retornar para tela de bolsista</a>
<br>
<a href="tela_adm.php">Retornar para tela de adm</a>