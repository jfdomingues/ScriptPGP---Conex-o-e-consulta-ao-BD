<?php

//Coneção ao banco de dados
$cx = mysqli_connect("host", "user", "pass");
$db = mysqli_select_db($cx, "nome_BD");

//Consulta ao banco
$sql = mysqli_query($cx, "SELECT * FROM nome_tabela") or die(mysqli_error($cx));

//Retorno dos dados
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "id: ".$aux["id"]."<br />"; 
  echo "Nome: ".$aux["nome"]."<br />"; 
  echo "E-mail: ".$aux["mail"]."<br />"; 
}

?>
