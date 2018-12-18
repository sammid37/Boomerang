<?php
include_once 'header.php';
include_once 'menu.php'
?>

<div class="container">
	<!-- <a href="tela_cadastro.php"><button type="button" class="btn btn-success">Cadastrar usuarios</button></a> -->

  	<div class="container">

		<!-- MENU ABAS -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="area_trabalho-tab" data-toggle="tab" href="#area_trabalho" role="tab" aria-controls="area_trabalho" aria-selected="true">Área de trabalho</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="cadastrar_objeto-tab" data-toggle="tab" href="#cadastrar_objeto" role="tab" aria-controls="cadastrar_objeto" aria-selected="false">Cadastrar objeto perdido</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="devolucao-tab" data-toggle="tab" href="#devolucao" role="tab" aria-controls="devolucao" aria-selected="false">Devolução</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="cadastrar_usuario-tab" data-toggle="tab" href="#cadastrar_usuario" role="tab" aria-controls="cadastrar_usuario" aria-selected="false">Cadastrar funcionário/bolsista</a>
			</li>
		</ul>



		<div class="tab-content" id="myTabContent">
			<!-- EXIBIR OBJETOS CADASTRADOS E DEVOLVIDOS -->
			<div class="tab-pane fade in active" id="area_trabalho" role="tabpanel" aria-labelledby="area_trabalho-tab"><br>
					<?php
						include_once 'exibir.php';
					?>
			</div>

			<!-- CADASTRAR OBJETO PERDIDO -->
			<div class="tab-pane fade" id="cadastrar_objeto" role="tabpanel" aria-labelledby="cadastrar_objeto-tab">
				<?php
					include_once 'tela_cad_perdido.php'
				?>
			</div>

			<!-- CADASTRAR OBJETO DEVOLVIDO -->
			<div class="tab-pane fade" id="devolucao" role="tabpanel" aria-labelledby="devolucao-tab">
				<?php
					include_once 'tela_cad_devolvido.php'
				?>
			</div>

			<!-- CADASTRAR FUNCIONÁRIO/BOLSISTA -->
			<div class="tab-pane fade" id="cadastrar_usuario" role="tabpanel" aria-labelledby="cadastrar_usuario-tab">
				<?php
					include_once 'tela_cadastro.php'
				?>
			</div>
		</div>
	</div>
</div>

	<!-- SCRIPTS DO MENU ABAS -->
	<script>
		$('#area_trabalho-tab a').on('click', function (e) {
			e.preventDefault()
			$(this).tab('show')
		})

		$('#cadastrar_objeto-tab a').on('click', function (e) {
			e.preventDefault()
			$(this).tab('show')
		})

		$('#devolucao-tab a').on('click', function (e) {
			e.preventDefault()
			$(this).tab('show')
		})

		$('#cadastrar_usuario-tab a').on('click', function (e) {
			e.preventDefault()
			$(this).tab('show')
		})

	</script>

<?php
	include_once 'footer.php'
?>
