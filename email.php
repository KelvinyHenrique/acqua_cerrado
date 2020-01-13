<?php 

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['mensagem']);

    $para = "contato@acquacerrado.com.br";
    $assunto = "Pergunta do Contato";
    $corpo = "Nome:".$nome."Email:".$email."Mensagem: ".$msg;
    $cabecalho = "From: info@acquacerrado.com.br"."\r\n."."Reply-To: ".$email."\r\n"."Z-Mailer: PHP/".phpversion();
    mail($para, $assunto, $corpo, $cabecalho);
    echo "<h2>Email Enviado Com sucesso</h2>";

}

?>







<form method="POST">
Nome:<br/>
<input type="text" name="nome"><br/>
Email:<br/>
<input type="email" name="email"><br/>
Mensagem:<br/>
<textarea name="mensagem" id="" cols="30" rows="10">
</textarea><br/>
<input type="submit" name="Enviar">
</form>