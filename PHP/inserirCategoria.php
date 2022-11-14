<?php

include("conexao.php");

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];

mysqli_select_db($banco,'lojas');
$sql = mysqli_query($banco,"INSERT INTO categorias(codigo,nome) values ('$codigo','$nome')");

if($sql){
    echo "<br>registro de produtos efetuado com sucesso. ";
    echo "<META http-equiv='refresh' content='2;url=products.php'>";
}else{
    echo "<br> não foi possivel fazer registro. tente novamente.<br> Causa: ".mysqli_error($banco);
}




?>