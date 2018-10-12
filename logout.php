<?php
session_start();

if(!isset($_SESSION['acesso']) || ($_SESSION['acesso'] != "OK") ) {
	$_SESSION["acesso"] = "Você deverá se autenticar!";
	header("Location: tela_login.php");
}
else{

	session_destroy();
	echo "Voc� saiu do sistema. <br/>";
	echo "<a href='tela_login.php' > Login </a> <br/>";

}



?>
