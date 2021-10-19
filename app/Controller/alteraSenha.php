<?php
require_once 'conexao.php';
require_once 'classUsuario.php';
if(isset ($_POST['f_senha'])&& !empty($_POST['f_senha']) && isset($_POST['f_csenha'])&& !empty($_POST['f_csenha'])){
        $n = new Usuario();
        $senha = ($_POST['f_senha']);
        $novasenha = ($_POST['f_csenha']);
        if ($senha === $novasenha){
            $token = $_SESSION['token'];
            if ($n->buscaUsuarioID($token)==true){
                $dados = $n->buscaUsuarioID($token, $senha);
                $id_usuario = $dados ['id_usuario'];
                if($n->alteraSenha($id_usuario, $senha)==true){
                    if($n->eliminaToken($id_usuario)==true){
                        echo "<script>alert('Senha alterada com sucesso.');location.href=\"../../index.php\";</script>";
                    }else {
                        echo "<script>alert('Token não foi eliminado');</script>";
                    }
                }echo "<script>alert('A senha não foi alterada.');</script>";
            }else {
                echo "<script>alert('Não achou o usuario.');</script>";
            }
        }else{
            echo "<script>alert('As senhas digitadas não são iguais.');location.href=\"../../novaSenha.php\";</script>";
        }
}else {
    echo "<script>alert('Uma ou nenhuma senha foi digitada.');location.href=\"../../novaSenha.php\";</script>";
}
?>