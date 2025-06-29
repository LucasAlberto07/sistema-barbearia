<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

include "conexao.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM agendamentos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: agendamentos.php");
        exit;
    } else {
        echo "Erro ao excluir o agendamento.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "ID do agendamento não informado.";
}
