<?php 

include("conexao.php");

$nome = $_POST["nome"];
$sku = $_POST["sku"];
$price = $_POST["price"];
$quantily = $_POST["quantily"];
$categories = $_POST["categories"];
$description = $_POST["description"];

mysqli_select_db($banco,'lojas');
$sql = mysqli_query($banco, "INSERT INTO produtos(nome,sku,price,quantily,categories,description) values ('$nome','$sku','$price','$quantily','$categories','$description')");

if($sql){
    echo "<br>registro de produtos efetuado com sucesso. ";
    echo "<META http-equiv='refresh' content='2;url=products.php'>";
}else{
    echo "<br> não foi possivel fazer registro. tente novamente.<br> Causa: ".mysqli_error($banco);
}




?>