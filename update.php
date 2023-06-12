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
$novo = $_POST["novo"];
$atualizar = $_POST["operacao"];

switch ($atualizar) {
    case 'nomeU':
        $sql = "UPDATE usuario SET nome = '$novo' WHERE nome = '$nome'";
        break;
    case 'emailU':
        $sql = "UPDATE usuario SET email = '$novo' WHERE nome = '$nome'";
        break;
    case 'senhaU':
        $sql = "UPDATE usuario SET senha = '$novo' WHERE nome = '$nome'";
        break;
    default:
        echo "<script>
            alert('Ocorreu um erro');
            window.location.href = 'index.html';   
            </script>";
        exit; 
}

if ($conecta->query($sql) === TRUE) {
    $_SESSION['usuario'] = $nome;
    echo "<script>
        alert('Atualizado com sucesso');
        window.location.href = 'index.html';   
        </script>";
} else {
    echo "<script>
        alert('Ocorreu um erro');
        window.location.href = 'index.html';   
        </script>";
}

$conecta->close();