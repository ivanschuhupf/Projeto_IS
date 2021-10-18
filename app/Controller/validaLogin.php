<?php
if(isset ($_POST['f_email'])&& !empty($_POST['f_email']) && isset($_POST['f_senha'])&& !empty($_POST['f_senha']))
{
    require_once 'conexao.php';
    require_once 'classUsuario.php';
    $u = new usuario();
    $email = addslashes( $_POST['f_email']);
    $senha = addslashes($_POST['f_senha']);
    if ($u ->login($email, $senha) == true){
        if (isset($_SESSION['id_usuario'])){
            header('Location: ../../paginaPrincipal.php');
        }else {
            echo "<script>alert('Usuario ou Senha estão Incorretos!');location.href=\"../../index.php\";</script>";
        }
    }else{
        echo "<script>alert('Usuario ou Senha estão Incorretos!');location.href=\"../../index.php\";</script>";
    }

}else {
    echo "<script>alert('Usuario ou Senha estão Incorretos!');location.href=\"../../index.php\";</script>";
}

?>