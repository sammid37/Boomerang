<?php
$host="127.0.0.1";
 $user="root";
 $psw="12345678";
 $schema="boomerang";

$con = mysqli_connect($host,$user,$psw,$schema) or die ("Não foi possível conectar-se ao banco de dados". mysqli_connect_error());


?>
