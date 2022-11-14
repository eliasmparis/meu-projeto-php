<?php
$banco =  mysqli_connect("localhost", "root", "usbw","lojas");

mysqli_select_db($banco,"produtos") or die ("não foi possivel encontrar o banco de dados entre produtos");

if(!$banco){
    echo "Erro! falha de conexão com o MYSQL";
}

mysqli_close($banco);

?>