<?php
$to      = 'maurobio23@gmail.com';
$subject = 'Contato lojavirtual';
$message = $_POST['mensagem'];
$dest = $_POST['email']


$headers = "From: " . $dest;

mail($to, $subject, $message, $headers);


?>

<script> alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">