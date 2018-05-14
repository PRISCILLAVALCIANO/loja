<?php
session_start();
$pedido = $_POST["nome"];
$cliente = $_POST["cliente"];
$email = $_POST["email"];
$descricao = $_POST["descricao"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "priscilla.valciano@gmail.com";
$mail->Password = "";

$mail->setFrom("priscilla.valciano@hotmail.com", "Dani Doces");
$mail->addAddress("$email");
$mail->Subject = "Dados do Pedido";
$mail->msgHTML("<html>Pedido: {$pedido}</br>Cliente: {$cliente}</br>Descricao: {$descricao}</html>");
$mail->AltBody = "Pedido: {$pedido}\nCliente: {$cliente}\nDescricao: {$descricao}";
$mail->addAttachment("/imagens/logoDaniDoces.jpg");


if($mail->send()){
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: entregas.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem" . $mail->ErrorInfo;
    header("Location: entregas.php");
}
die();
?>