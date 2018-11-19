<center><h4>Objetos perdidos cadastrados</h4></center>
<table class="table">
  <thead>
  <tr>
    <th scope="col">ID do Objeto</th>
    <th scope="col">Nome do objeto</th>
    <th scope="col">Local</th>
    <th scope="col">Data</th>
  </tr>
  </thead>
  <tbody> 
    <?php
      include 'Squid_Conexao.php';
      $existe = false;
 
      while($row = mysqli_fetch_array($result)){
        if(row[$ID_Obj] == $Obj){
          $existe = true;
        }
      }
       if(!existe){
        die("Objeto não cadastrado");
      }else{
        // echo"É PARA DELTAR!";
        $sql = "DELETE FROM Objeto WHERE ID_Obj = ".$Obj;
        $result = mysqli_query($con, $sql);
      }
      $select = "SELECT O.Id_Obj, O.ID_Obj, O.Nome_Obj, O.Local_Obj, O.Data FROM Objeto O";
      $result = mysqli_query($con,$select);
 
      while($row = mysqli_fetch_array($result)){
        echo
        "<tr>
          <td>".$row[Id_Obj]."</td>
          <td>".$row[Nome_Obj]."</td>
          <td>".$row[Local_Obj]."</td>
          <td>".$row[Data]."</td>
        </tr>";
      }
 
      
    ?>  
    <!--<?php
      // include 'Squid_Conexao.php';
      // $select = "SELECT O.ID_Obj, O.Nome_Obj, O.Local_Obj, O.Data FROM Objeto O";
      // $result = mysqli_query($con,$select);
      // 
      // while($row = mysqli_fetch_array($result)){
      //   echo
      //   "<tr>
      //     <td>".$row[Nome_Obj]."</td>
      //     <td>".$row[Local_Obj]."</td>
      //     <td>".$row[Data]."</td>
      //   </tr>";
      // }
    ?>-->
  </tbody>
</table><br>

<center><h4>Objetos Devolvidos</h4></center>
<table class="table">
  <thead>
  <tr>
    <th scope="col">ID Devolução</th>
    <th scope="col">Nome do objeto</th>
    <th scope="col">Nome do dono</th>
    <th scope="col">Matrícula do Dono</th>
    <th scope="col">Data de devolução</th>
  </tr>
  </thead>
  
  <tbody>   
    <?php
      include 'Squid_Conexao.php';
      $select = "SELECT OD.ID_ObjDev, O.Nome_Obj, OD.Nome_Dono, OD.Mat_Dono, OD.Data_Dev FROM Objeto_Devolvido OD, Objeto O WHERE OD.Obj = O.ID_Obj";
      $result = mysqli_query($con,$select);

      while($row = mysqli_fetch_array($result)){
        echo
        "<tr>
          <td>".$row[ID_ObjDev]."</td>
          <td>".$row[Nome_Obj]."</td>
          <td>".$row[Nome_Dono]."</td>
          <td>".$row[Mat_Dono]."</td>
          <td>".$row[Data_Dev]."</td>
        </tr>";
      }
    ?>
  </tbody>
</table>
