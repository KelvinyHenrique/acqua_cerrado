<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$assunto = $_POST['subject'];
$endereco = $_POST['endereco'];
$mensagem = $_POST['message'];
$to = "contato@acquacerrado.com.br";
    
    
    $message = "Email: ".$email."<br/>"."Nome: ".$nome."<br/>"."Telefone: ".$telefone."<br/>"."Assunto: 
".$assunto."<br/>"."Mensagem: ".$mensagem."<br/>"."Endereço: ".$endereco."<br/>";


$headers = "De:". $email;
$headers = 'Content-type: text/html;' . "\r\n";

mail($to, $assunto, $message, $headers);

header("Location: ../index.html");

} else {
    header("Location: ../404.html");
}

?>
