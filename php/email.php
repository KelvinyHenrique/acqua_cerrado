<?php 

$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$assunto = $_POST['subject'];
$mensagem = $_POST['message'];

inserirclientes();
function inserirclientes()
{
    require 'config.php';

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];
    $assunto = $_POST['subject'];
    $mensagem = $_POST['message'];
    $sql             = $pdoConn->prepare("INSERT INTO email SET nome = :nome,  email = :email, telefone = :telefone, assunto = :assunto, msg = :mensagem");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":telefone", $telefone);
    $sql->bindValue(":assunto", $assunto);
    $sql->bindValue(":mensagem", $mensagem);
    $sql->execute();
    echo "Mensagem enviada com sucesso";
}




?>