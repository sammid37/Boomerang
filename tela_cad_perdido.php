<div class="row box_login">
  <div class="col-sm-12">
    <div class="text-center border container borda">
      <?php
        require "Inicial_Conexao.php";
       ?>
      <b><p style="font-size: 14pt; margin-top: 5%;">Cadastrar objeto perdido</p></b><br>
      <form action = "" method = "post">

        <div class="input-group sm-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="nome">Nome</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
            name = "Nome_Obj">
          </div><br>
        </div>

        <div class="input-group sm-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="local">Local</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
            name = "Local_Obj">
          </div>
        </div><br>

        <div class="input-group sm-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="data">Data</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
            name = "Data">
          </div>
        </div>

        <input type="submit" class="btn btn-success " id="botao_perdido" style="margin-left: 65%;margin-bottom: 10%; margin-top: 10%" value = "Cadastrar"/>
      </form>
    </div>
  </div>
</div>
