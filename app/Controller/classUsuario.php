<?php
require_once 'conexao.php';
class Usuario{
    public function login ($email, $senha){ /* valdia usuario */
        global $pdo;
        $sql = $pdo->prepare("SELECT id_usuario, email, senha FROM usuario WHERE email = :email and senha = :senha");
        $sql ->bindValue(":email", $email);
        $sql ->bindValue(":senha", $senha);
        $sql-> execute();

        if ($sql->rowCount()>0){
            $dado =$sql->fetch();
            $_SESSION[":email"] = $dado ["email"];
            return true;
        }else {
            return false;
        }
    }
    public function buscaIDUsuario ($email) {
        global $pdo;
        $dadosUser = array();
        $sql = $pdo->prepare ("SELECT id_usuario FROM usuario WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        $dadosUser = $sql->fetch(PDO::FETCH_ASSOC);
        return $dadosUser;

        if ($sql->rowCount()>0){
            $dado =$sql->fetch();
            return true;
        }else {
            return false;
        }
    }
    public function token ($id_usuario, $token) { /* vincula token ao usuario*/
        global $pdo;
        $sql = $pdo -> prepare ("UPDATE usuario SET token = '$token' WHERE id_usuario = :id_usuario");
        $sql->bindValue(":id_usuario", $id_usuario);
        $sql -> execute();
        if ($sql->rowCount()>0){
            return true;
        }else {
            return false;
        }

    }
    public function buscaTokenUsuario ($id_usuario){
        global $pdo;
        $dadosT = array();
        $sql = $pdo->prepare("SELECT email, token FROM usuario
                            WHERE id_usuario = :id_usuario");
        $sql->bindValue(":id_usuario", $id_usuario);
        $sql->execute();
        $dadosT = $sql->fetch(PDO::FETCH_ASSOC);
        return $dadosT;
        if ($sql->rowCount()>0){
            return true;
        }else {
            return false;
        }
    }
    public function validaToken($token){ /* valdia token */
        global $pdo;
        $sql = $pdo -> prepare ("SELECT id_usuario, email FROM usuario WHERE token = :token");
        $sql->bindValue(":token", $token);
        $sql-> execute();

        if ($sql->rowCount()>0){
            return true;
        }else {
            return false;
        }
    }

    public function buscaUsuarioID($token){
        global $pdo;
        $dadosUsuario = array();
        $sql = $pdo ->prepare ("SELECT id_usuario, email FROM usuario WHERE token = :token");
        $sql ->bindValue(":token", $token);
        $sql -> execute();
        $dadosUsuario = $sql->fetch(PDO::FETCH_ASSOC);
        return $dadosUsuario;

        if ($sql->rowCount()>0){
            return true;
        }else {
            return false;
        }
    }

    public function alteraSenha($id_usuario, $senha){
        global $pdo;
        $sql = $pdo -> prepare ("UPDATE usuario SET senha = :senha WHERE id_usuario = :id_usuario");
        $sql ->bindValue(":id_usuario", $id_usuario);
        $sql ->bindValue(":senha",$senha);
        $sql ->execute();

        if ($sql->rowCount()>0){
            return true;
        }else {
            return false;
        }
    }
    public function eliminaToken($id_usuario){
        global $pdo;
        $sql = $pdo -> prepare ("UPDATE usuario SET token = NULL WHERE id_usuario = :id_usuario");
        $sql ->bindValue(":id_usuario", $id_usuario);
        $sql -> execute();

        if ($sql->rowCount()>0){
            return true;
        }else {
            return false;
        }
    }
}
?>