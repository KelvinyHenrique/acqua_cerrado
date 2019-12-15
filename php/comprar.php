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

echo "Email: ".$email."<br/>"."Nome: ".$nome."<br/>"."Telefone: ".$telefone."<br/>"."Assunto: 
".$assunto."<br/>"."Plano: ".$plano."<br/>"."Endereço: ".$endereco."<br/>"."Forma de Pagamento: ".$fpagamento;

$to = "contato@acquacerrado.com.br"; 

$message = "Email: ".$email."<br/>"."Nome: ".$nome."<br/>"."Telefone: ".$telefone."<br/>"."Assunto: 
".$assunto."<br/>"."Plano: ".$plano."<br/>"."Endereço: ".$endereco."<br/>"."Forma de Pagamento: ".$fpagamento;


$headers = "De:". $email;
$headers = 'Content-type: text/html;' . "\r\n";

mail($to, $assunto, $message, $headers);

echo "A mensagem de e-mail foi enviada.";

?>
