<?php

	include "Squid_Conexao.php";

	$Matricula= $_POST['Matricula'];
	$Nome = $_POST['Nome'];
	$Senha = $_POST['Senha'];
	$tipousuario = $_POST['tipousuario'];

	if ($tipousuario == 1) {
		$insertA = "INSERT INTO Administrador VALUES ('$Nome',$Matricula,md5('$Senha'),$tipousuario)";
		$query = "INSERT INTO Usuario VALUES('$Nome',$Matricula,md5('$Senha'),$tipousuario)";

		$resultA = mysqli_query($con,$insertA);
		$result = mysqli_query($con,$query);

		if ($resultA) {
			echo "<h4>Administrador cadastrado com sucesso</h4>";
		}else {
			echo "<h4>Falha ao realizar cadastro</h4>".$con;
		}
	}elseif ($tipousuario == 2) {
		$insertF = "INSERT INTO Funcionario VALUES ('$Nome',$Matricula,md5('$Senha'),$tipousuario)";
		$query = "INSERT INTO Usuario VALUES('$Nome',$Matricula,md5('$Senha'),$tipousuario)";

		$resultF = mysqli_query($con,$insertF);
		$result = mysqli_query($con,$query);

		if ($resultF) {
			echo "<h4>Funcionario cadastrado com sucesso</h4>";
		}else {
			echo "<h4>Falha ao realizar cadastro</h4>";
		}
	}else {
		// echo "<h4>Esse tipo de usuário não existe</h4>";
	}


	$run = mysqli_query($con,$query);

?>

<a href="tela_adm.php">Retornar para tela de adm</a>
