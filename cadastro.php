<?php
include("conexao.php");
$nome= $_POST["nome"];
$email= $_POST['email'];
$data= $_POST["data"];
$mae= $_POST['mae'];
$senha= password_hash ($_POST["senha"] , PASSWORD_DEFAULT);

$sql = "INSERT INTO cadastro (nome, email, data, mae, senha)
value( '$nome','$email','$data','$mae', '$senha')";

if (mysqli_query($conexao , $sql)) {
    echo "usuario cadastrado com sucesso";
}
else {
      echo "usuario não cadastrado".mysqli_connect_error($conexao);
}

?>