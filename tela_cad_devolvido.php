<div class="row box_login">
  <div class="col-sm-12">
    <div class="text-center border container borda">

      <b><p style="font-size: 14pt; margin-top: 5%;">Cadastrar objeto devolvido</p></b><br>

      <form action = "Inicial_Conexao1.php" method = "post">
        <div class="input-group sm-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="nome_dono">Nome do dono</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
            name = "Nome_Dono">
          </div>
        </div><br>

        <div class="input-group sm-4">
          <div class="input-group-prepend">
            <!-- <label for="Nome_Obj">Selecione</label> -->
            <select class="form-control" name="Nome_Obj">
              <option value="0" disabled selected>selecione objeto</option>
              <?php
              include 'Squid_Conexao.php';
              $select = "SELECT O.ID_Obj, O.Nome_Obj, O.Local_Obj, O.Data FROM Objeto O";
              $result = mysqli_query($con,$select);

              while($row = mysqli_fetch_array($result)){
                echo
                "<option name='Nome_Obj' value="
                .$row[ID_Obj].
                ">"
                .$row[Nome_Obj]."
                </option>";
              }
              ?>
					  </select>
            
            <!-- <span class="input-group-text" id="nome_objeto">Nome do objeto</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
            name = "Nome_ObjDev"> -->
          </div>
        </div><br>

        <div class="input-group sm-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="matricula">Matrícula</span>
            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
            name = "Matricula_Dono">
          </div>
        </div><br>


        <div class="input-group sm-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="data_dev">Data</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
            name = "Data_Dev">
          </div>
        </div>

        <input type="submit" class="btn btn-success" id="botao_devolvido" style="; margin-left: 65%; margin-bottom: 10%; margin-top: 10%" value = "Devolução"/>
      </form>
    </div>
  </div>
</div>
