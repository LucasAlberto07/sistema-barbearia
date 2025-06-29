<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

include "conexao.php";

$sql = "SELECT * FROM agendamentos ORDER BY data_agendamento, hora_agendamento";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agendamentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <span class="navbar-brand">Agendamentos</span>
        <div>
            <a href="agendar.php" class="btn btn-outline-light btn-sm me-2">Novo Agendamento</a>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">Sair</a>
        </div>
    </div>
</nav>

<!-- Conteúdo principal -->
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Agendamentos Cadastrados</h4>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= htmlspecialchars($row['nome_cliente']) ?></td>
                                <td><?= date("d/m/Y", strtotime($row['data_agendamento'])) ?></td>
                                <td><?= date("H:i", strtotime($row['hora_agendamento'])) ?></td>
                                <td>
                                    <a href="excluir_agendamento.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este agendamento?');">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>

<?php $conn->close(); ?>
