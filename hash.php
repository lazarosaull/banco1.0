<?php
function gerar($senha){
    $crip = password_hash($senha, PASSWORD_DEFAULT);
    return $crip;
}
?>