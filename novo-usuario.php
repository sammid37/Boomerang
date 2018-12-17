<form method="post" action="con_user.php">
	<div class="row box_login">
		<div class="col-sm-12">
			<div class="text-center border container borda">
				<b><p style="font-size: 14pt; margin-top: 2%; padding-top:6%">Cadastro</p></b>
					<div class="input-group sm-4">
						<div class="input-group-prepend">
							<span class="input-group-text" id="Nome_Adm">Nome:</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Nome">
						</div>
					</div><br>

					<div class="input-group sm-4">
						<div class="input-group-prepend">
							<span class="input-group-text" id="Matricula_Adm">Matrícula:</span>
							<input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Matricula" required="required" value="<?php echo $Matricula; ?>">
						</div>
					</div><br>
					<div class="input-group sm-4">
						<div class="input-group-prepend">
							<span class="input-group-text" id="Senha_Adm">Senha:</span>
							<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Senha" required="required" value="<?php echo $Matricula; ?>">
						</div>
					</div><br>

					<div class="form-group">
					    <label for="tipousuario">Tipo de usuário</label>
					    <select name="tipousuario" class="form-control" id="tipousuario">
								<option value="0" disabled selected>selecione o tipo de usuário</option>
					      <option value="1" name="tipousuario">1 Administrador</option>
					      <option value="2" name="tipousuario">2 Funcionario ou Bolsista</option>
					    </select>
  				</div>


				<center><input type="submit" class="btn btn-success " id="botao_cadastro_Adm" value="cadastrar" href = "inicial.php"></center>
			</div>
		</div>
	</div>
</form>