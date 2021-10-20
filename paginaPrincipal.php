<?php
session_start();
if(!isset($_SESSION["nome_usuario"])){
    echo "<script>alert('Você não está Logado!');location.href=\"index.php\";</script>";
}else {
    require_once'app/view/paginaPrincipal.php';
}
?>
