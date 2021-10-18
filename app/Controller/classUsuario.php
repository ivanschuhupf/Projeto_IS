<?php
class Usuario{
    public function login ($email, $senha){ /* valdia usuario */
        global $pdo;
        $sql = "SELECT * FROM usuario WHERE email = :email and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql ->bindValue("email", $email);
        $sql ->bindValue("senha", $senha);
        $sql-> execute();

        if ($sql->rowCount()>0){
            $dado =$sql->fetch();
            $_SESSION["id_usuario"] = $dado ["id_usuario"];
            return true;
        }else {
            return false;
        }
    }
    public function buscaIDUsuario ($email) {
        $dadosUser = array();
        $sql = "SELECT id_usuario FROM usuario WHERE email = :email";
        $sql = $this ->pdo->prepare ($sql);
        $sql->bindvalue(":email", $email);
        $sql->execute();
        $dadosUser = $sql->fetch(PDO::FETCH_ASSOC);
        return $dadosUser;

        if ($sql->rowCount()>0){
            $dado =$sql->fetch();
            $_SESSION["email"] = $dado ["email"];
            return true;
        }else {
            return false;
        }
    }

    public function token ($id, $token) { /* vincula token ao usuario*/
        global $pdo;
        $sql = "UPDATE usuario SET token = '$token' WHERE id_usuario = '$id'";
        $sql = $pdo -> prepare ($sql);
        $sql -> execute();

        if ($sql->rowCount()>0){
            $dado =$sql->fetch();
            $_SESSION["email"] = $dado ["email"];
            return true;
        }else {
            return false;
        }
    }

    public function buscaTokenUsuario ($id_user){
        global $pdo;
        $dadosToken = array();
        $sql = $this->pdo->prepare("SELECT email, token FROM usuario
                            WHERE id_usuario = '$id_user'");
        $sql->bindValue(":id_usuario", $id_user);
        $sql->execute();
        $dadosToken = $sql->fetch(PDO::FETCH_ASSOC);
        return $dadosToken;
    }
    }
?>