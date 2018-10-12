<center><h4>Objetos perdidos cadastrados</h4></center>
<table class="table">
  <thead>
  <tr>
    <th scope="col">Nome do objeto</th>
    <th scope="col">Local</th>
    <th scope="col">Data</th>
  </tr>
  </thead>
  
  <tbody>   
    <?php
      include 'Squid_Conexao.php';
      $select = "SELECT O.ID_Obj, O.Nome_Obj, O.Local_Obj, O.Data FROM Objeto O";
      $result = mysqli_query($con,$select);

      while($row = mysqli_fetch_array($result)){
        echo
        "<tr>
          <td>".$row[Nome_Obj]."</td>
          <td>".$row[Local_Obj]."</td>
          <td>".$row[Data]."</td>
        </tr>";
      }
    ?>
  </tbody>
</table><br>

<center><h4>Objetos Devolvidos</h4></center>
<table class="table">
  <thead>
  <tr>
    <th scope="col">Nome do objeto devolvido</th>
    <th scope="col">Nome do dono</th>
    <th scope="col">Matrícula</th>
    <th scope="col">Data de devolução</th>
  </tr>
  </thead>
  
  <tbody>   
    <?php
      include 'Squid_Conexao.php';
      $select = "SELECT OD.Nome_ObjDev, OD.Nome_Dono, OD.Matricula_Dono, OD.Data_Dev FROM Objeto_Devolvido OD";
      $result = mysqli_query($con,$select);

      while($row = mysqli_fetch_array($result)){
        echo
        "<tr>
          <td>".$row[Nome_ObjDev]."</td>
          <td>".$row[Nome_Dono]."</td>
          <td>".$row[Matricula_Dono]."</td>
          <td>".$row[Data_Dev]."</td>
        </tr>";
      }
    ?>
  </tbody>
</table>
