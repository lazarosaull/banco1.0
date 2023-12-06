<?php
$host="localhost";
$nome= "root";
$senha="";
$banco= "prova1";


$conexao = new mysqli($host, $nome, $senha, $banco);
if ($conexao->error) {
    die("falha". $mysqli->error);
}
else {
    echo"deu certo; ";
}
?>