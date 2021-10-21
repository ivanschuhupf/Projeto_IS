<?php 
require_once 'conexao.php';
require_once 'classUsuario.php';

if(isset ($_POST['f_email'])&& !empty($_POST['f_email']) && isset($_POST['f_senha'])&& !empty($_POST['f_senha']) && isset($_POST['f_csenha'])&& !empty($_POST['f_csenha'])){
    $u = new Usuario();
    $email = $_POST['f_email'];
    $senha = $_POST['f_senha'];
    $csenha = $_POST['f_csenha'];
    if ($senha==$csenha){
        if(($u->criaUsuario($email, $senha)==true)){
            echo "<script>alert('Usuario criado com sucesso!');location.href=\"../../index.php\";</script>";
        }else{
            echo "<script>alert('Não foi possivel criar um novo usuario!');location.href=\"../../index.php\";</script>";
        }
    }else {
        echo "<script>alert('As senhas não são iguais!');location.href=\"../../criarUsuario.php\";</script>";
    }
}else {
    echo "<script>alert('Você nao preencheu todos campos!');location.href=\"../../index.php\";</script>";
}
?>