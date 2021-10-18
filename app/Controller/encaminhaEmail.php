<?php
require_once 'classUsuario.php';
require_once 'geraToken.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
echo $id_user;
$e = new Usuario();
$dados = $dadosToken -> buscaTokenUsuario($id_user);

// Instância da classe
$mail = new PHPMailer(true);
try
{

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
    $mail->Body    = '<b>Segue o token: '.$tkn;
    $mail->AltBody = 'Segue o código: ' .$tkn;
    // Enviar
    $mail->send();

    echo "<script>location.href=\"../../insereToken.php\";</script>";

}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}