<?php
require_once 'conexao.php';
require_once 'classUsuario.php';
if(isset ($_POST['f_email'])&& !empty($_POST['f_email']) && isset($_POST['f_senha'])&& !empty($_POST['f_senha']))
{
    $u = new usuario();
    $email = ( $_POST['f_email']);
    $senha = ($_POST['f_senha']);
    if ($u ->login($email, $senha) == true){
        header('Location: ../../paginaPrincipal.php');
    }else{
        echo "<script>alert('Usuario ou Senha estão Incorretos!');location.href=\"../../index.php\";</script>";
    }
}else {
    echo "<script>alert('Os campos não foram preenchidos corretamente!');location.href=\"../../index.php\";</script>";
}

?>