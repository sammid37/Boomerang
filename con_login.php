<?php
	session_start();
	include_once 'conexao.php';

	$Matricula = isset($_POST['Matricula']) ? trim($_POST['Matricula']):FALSE;
	$Senha = isset($_POST['Senha']) ? trim($_POST['Senha']):FALSE;

	if (!$Matricula || !$Senha){
	$_SESSION['acesso']= "Digite os dados corretamente";
		header("location: tela_login.php");
	}

	// $con = mysqli_connect($host,$user,$psw,$schema) or die("Conexão ruim".mysqli_connect_error());
	$select = "SELECT*FROM Usuario WHERE Matricula = '$Matricula' AND Senha=md5('$Senha')";
  $result = mysqli_query($con,$select);

	  if(mysqli_num_rows($result) > 0){
	  	$dados = mysqli_fetch_array($result);
	    $_SESSION['Nome'] = $dados['Nome'];
	  	$_SESSION['Matricula'] = $dados['Matricula'];
	  	$_SESSION['Senha'] = $Senha;
	  	$_SESSION['tipousuario'] = $dados['tipousuario'];
	  	$_SESSION['acesso'] = "OK";

	  	if($_SESSION['tipousuario'] == 1){
	  		header("location: admin.php");
	    } else if($_SESSION['tipousuario'] == 2){
	      header("location: funcionario.php");
	    }else{
	    	header("location: login.php");
	    }
	  }else {
	  	$_SESSION['Matricula']  = "$Matricula";
	  	$_SESSION['Senha']  = "";
	  	$_SESSION['acesso'] = "tente de novo";
	  	header("location: login.php");
	  }

?>
