<?php
session_start();

$nomeB_servidor = "sql10.freemysqlhosting.net";
$nomeB_usuario = "sql10624189";
$senhaB = "n9UvWuzumq";
$nome_B = "sql10624189";

$conecta = new mysqli($nomeB_servidor, $nomeB_usuario, $senhaB, $nome_B);
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

$nome = $_SESSION['usuario'];

$sql = "DELETE FROM usuario WHERE nome = '$nome'";

if ($conecta->query($sql) === TRUE) {
    session_destroy(); // Destroi a sessão atual
    echo "<script>
        alert('Conta excluída com sucesso');
        window.location.href = 'index.html';   
        </script>";
} else {
    echo "<script>
        alert('Ocorreu um erro');
        window.location.href = 'index.html';   
        </script>";
}

$conecta->close();