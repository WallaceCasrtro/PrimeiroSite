<?php
session_start();

$nomeB_servidor = "sql10.freemysqlhosting.net";
$nomeB_usuario = "sql10624189";
$senhaB = "n9UvWuzumq";
$nome_B = "sql10624189";

$conecta = new mysqli($nomeB_servidor, $nomeB_usuario, $senhaB, $nome_B);

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conecta->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
    $_SESSION['usuario'] = $nome; 
} else {
    echo "Erro ao inserir registro: " . $conecta->error;
}

$conecta->close();

header("Location: Perfil.php");
exit();
?>