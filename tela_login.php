<?php
	session_start();
	$Matricula = isset($_SESSION['Matricula']) ? $_SESSION['Matricula']: "";
	$Senha = isset($_SESSION['Senha']) ? $_SESSION['Senha']: "";
?>

<?php
	include_once 'header.php';
	include_once 'menu1.php'
?>

	<div class="row box_login">

		<div class="col-sm-12">
			<div class="text-center border container borda">
				<b><p style="font-size: 14pt; margin-top: 2%;">Login</p></b>
				<?php
				 if(isset($_SESSION['acesso']) && $_SESSION['acesso'] != "OK") {
					 echo "<h4 style='center-align'>".$_SESSION['acesso']."</h4>";
					 // echo  $_SESSION['acesso'];
				 }
				 ?>
				<!-- FORMULÁRIO -->
				<form action="con_login.php" method="post">
					<div class="form-group">
						<span class="glyphicon glyphicon-envelope btn-sm"></span>
						<input type="text" name="Matricula" placeholder="Matrícula" value="<?php echo $Matricula; ?>" required="required">
						<br><br>
						<span class="glyphicon glyphicon-asterisk btn-sm"></span>
						<input type="password" name="Senha"  placeholder="Senha" value="<?php echo $Senha; ?>" required="required"><br><br>
						<center><input type="submit" class="btn btn-success " id="botao_login"/></center><br>
						<a href="tela_cadastro.php">Não possui login? Cadastre-se</a>
					</div>
			</div>
		</div>
	</div>

<?php
	include_once 'footer.php'
?>
