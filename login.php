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

$nome = $_POST["nomeL"];
$senha = $_POST["senhaL"];

$sql = "SELECT * FROM usuario WHERE nome=? AND senha=?";
$stmt = $conecta->prepare($sql);
$stmt->bind_param("ss", $nome, $senha);
$stmt->execute();
$resultado = $stmt->get_result();

if (!$resultado) {
    die("Erro na consulta: " . $conecta->error . "<br>");
}

if ($resultado->num_rows > 0) {
    session_start();
    $_SESSION['usuario'] = $nome;
    header("Location: Perfil.php");
    exit();
} else {
    echo "<script>
            alert('Nome ou senha incorreto');
            window.location.href = 'contact.html';   
        </script>";
}

$conecta->close();
?>