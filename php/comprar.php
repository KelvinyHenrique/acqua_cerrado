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
$mensagem = $_POST['message'];
$to = "contato@acquacerrado.com.br";
 

$message = "Email: ".$email."<br/>"."Nome: ".$nome."<br/>"."Telefone: ".$telefone."<br/>"."Assunto: 
".$assunto."<br/>"."Mensagem: ".$mensagem."<br/>"."Plano: ".$plano."<br/>"."Endereço: ".$endereco."<br/>"."Forma de Pagamento: ".$fpagamento."<br/>";


$headers = "De:". $email;
$headers = 'Content-type: text/html;' . "\r\n";

mail($to, $assunto, $message, $headers);

header("Location: ../index.html");
?>
