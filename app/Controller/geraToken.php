<?php
require_once 'conexao.php';
require_once 'classUsuario.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['f_email']) && !empty($_POST['f_email'])){
    $b = new usuario();
    $email =($_POST['f_email']);
    if ($b->buscaIDUsuario($email)==true){
        $dados = $b ->buscaIDUsuario($email);
        $id_usuario = $dados['id_usuario'];
        $tokenn = md5(microtime(true).mt_Rand());
        $token = substr($tokenn,0,6);
        $_SESSION['token'] = $token;
        if ($b->token($id_usuario, $token) == true){
            if ($b->buscaTokenUsuario($id_usuario)==true){
                $dados=$b -> buscaTokenUsuario($id_usuario);
                // Instância da classe
                $mail = new PHPMailer(true);

                // Configurações do servidor
                $mail->isSMTP();        //Define o uso de SMTP no envio
                $mail->SMTPAuth = true; //Habilita a autenticação SMTP
                $mail->Username   = 'cod.automatico@gmail.com';
                $mail->Password   = 'automatico123';
                // Criptografia do envio SSL também é aceito
                $mail->SMTPSecure = 'tls';
                // Informações específicadas pelo Google
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                // Define o remetente
                $mail->From = 'cod.automatico@gmail.com';
                // Define o destinatário
                $mail->addAddress($email);
                // Conteúdo da mensagem
                $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
                $mail->Subject = 'Recuperacao de Senha';
                $mail->Body    = '<b>Segue o token: '.$token;
                $mail->AltBody = 'Segue o código: ' .$token;
                // Enviar
                $mail->send();
                header("location: ../../insereToken.php");
            }
        }
    }else{
    /*echo "<script>alert('Deu ruim!');location.href=\"../../index.php\";</script>";*/
}
}
