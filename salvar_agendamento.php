<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

include "conexao.php";

$nome = $_POST['nome_cliente'];
$data = $_POST['data_agendamento'];
$hora = $_POST['hora_agendamento'];

// Prepared Statement para evitar SQL Injection
$stmt = $conn->prepare("INSERT INTO agendamentos (nome_cliente, data_agendamento, hora_agendamento) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $data, $hora);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Agendamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">

                    <?php if ($stmt->execute()) { ?>
                        <h4 class="text-success mb-3">✅ Agendamento realizado com sucesso!</h4>
                        <a href="agendar.php" class="btn btn-primary">Voltar ao Agendamento</a>
                    <?php } else { ?>
                        <h4 class="text-danger mb-3">❌ Erro ao agendar:</h4>
                        <p><?= $conn->error ?></p>
                        <a href="agendar.php" class="btn btn-secondary">Tentar novamente</a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
