<?php
$to      = $_POST['email'];
$subject = 'Contato lojavirtual';
$message = $_POST['mensagem'];
$headers = 'From: '. Config::EMAIL_HOST .''. "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>