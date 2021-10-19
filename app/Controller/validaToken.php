<?php
require_once 'classUsuario.php';
require_once 'conexao.php';
if(isset ($_POST['f_token'])&& !empty($_POST['f_token']))
{
    $a = new Usuario();
    $token=($_POST['f_token']);
    if ($a->validaToken($token) == true){
        header('Location: ../../novaSenha.php');
    }else {
        echo "<script>alert('O token não é valido 1 !');location.href=\"../../index.php\";</script>";
    }
}else {
    echo "<script>alert('O token não é valido 3 !');location.href=\"../../index.php\";</script>";
}

?>