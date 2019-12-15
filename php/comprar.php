<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$assunto = $_POST['subject'];
$plano = $_POST['planos'];
$endereco = $_POST['endereco'];
$fpagamento = $_POST['fpagamento'];

$to = "contato@acquacerrado.com.br";
$message = $email."<br/>"."<br/>".$nome.$telefone.$assunto.$plano.$endereco.$fpagamento;

$headers = "De:". $email;
$headers = 'Content-type: text/html;' . "\r\n";

mail($to, $assunto, $message, $headers);

echo "A mensagem de e-mail foi enviada.";

?>
