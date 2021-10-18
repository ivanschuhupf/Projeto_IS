<?php
require_once 'conexao.php';
require_once 'classUsuario.php';

if(isset($_POST['f_email']) && !empty($_POST['f_email'])){
    $b = new usuario();
    $email = addslashes($_POST['f_email']);
    if ($b->buscaIDUsuario($email)==true){
        $dados = $dadosUser -> buscaIDUsuario();
        $id = $dados['id_usuario'];
        $t = new Usuario();
        $tokenn = md5(microtime(true).mt_Rand());
        $token = substr($tokenn,0,6);

        if ($t->token($id, $token) == true){

            header ('Location: encaminhaEmail.php');
        }else{
            echo "<script>alert('Deu ruim!');location.href=\"../../insereToken.php\";</script>";
        }
    }
}
