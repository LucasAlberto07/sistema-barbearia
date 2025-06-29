<?php
session_start();
require_once 'conexao.php';

// Verifica se os dados foram enviados
if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    header("Location: login.php?erro=Preencha todos os campos");
    exit;
}

// Conexão com o banco (já está no conexao.php)
if ($conn->connect_error) {
    header("Location: login.php?erro=Erro no servidor");
    exit;
}

// Dados do formulário
$usuario = $conn->real_escape_string($_POST['usuario']);
$senha = md5($_POST['senha']); // Usando MD5 conforme solicitado

// Consulta SQL simples
$sql = "SELECT * FROM barbeiro WHERE usuario = '$usuario' AND senha = '$senha'";
$resultado = $conn->query($sql);

if ($resultado->num_rows == 1) {
    // Login válido
    $barbeiro = $resultado->fetch_assoc();
    
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $barbeiro['usuario'];
    $_SESSION['nome'] = $barbeiro['nome'];
    
    header("Location: agendar.php");
} else {
    // Login inválido
    header("Location: login.php?erro=Usuário ou senha incorretos");
}

$conn->close();
?>