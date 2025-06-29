<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agendar Horário - Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Agendar Horário - Barbearia</h2>

    <div class="mb-3">
        <a href="agendamentos.php" class="btn btn-link">Ver Agendamentos</a>
        <a href="logout.php" class="btn btn-link">Sair</a>
    </div>

    <form action="salvar_agendamento.php" method="post" class="border p-4 rounded shadow-sm bg-light">

        <div class="mb-3">
            <label for="nome_cliente" class="form-label">Nome do Cliente:</label>
            <input type="text" id="nome_cliente" name="nome_cliente" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="data_agendamento" class="form-label">Data:</label>
            <input type="date" id="data_agendamento" name="data_agendamento" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="hora_agendamento" class="form-label">Hora:</label>
            <input type="time" id="hora_agendamento" name="hora_agendamento" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Agendar</button>
    </form>

</body>
</html>
