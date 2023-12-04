<?php
$host="localhost";
$nome= "root";
$senha="";
$banco= "provinha2";


$conexao = new mysqli($host, $nome, $senha, $banco);
if ($conexao->error) {
    die("falha". $mysqli->error);
}
else {
    echo"deu certo; ";
}
?>