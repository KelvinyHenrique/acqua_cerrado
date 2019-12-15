<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "kelvinyhenrique17@gmail.com";

$to = "contato@acquacerrado.com.br";

$subject = "Verificando o correio do PHP";

$message = "<div>".$from."<div/>"."<span>"."O correio do PHP funciona bem"."<span/>";

$headers = "De:". $from;
$headers = 'Content-type: text/html;' . "\r\n";

mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";

?>
