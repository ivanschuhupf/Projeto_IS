<<<<<<< HEAD
<?php
session_start();
if(!isset($_SESSION["nome_usuario"])){
    echo "<script>alert('Você não está Logado!');location.href=\"index.php\";</script>";
}else {
    require_once'app/view/paginaPrincipal.php';
}
?>
=======
<!DOCTYPE html>
<html lang="pt-br">
    <title>Universidade de Passo Fundo</title>
    <?php
        require_once 'app/view/paginaPrincipal.php';
    ?>
</html>
>>>>>>> 81c2dae0d8c1fc1f7e56d256b5916bd8acab6c2e
