<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <meta http-equiv="refresh" content="3;URL=login.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center">
        <div class="alert alert-info shadow-sm">
            <h4 class="alert-heading">Você saiu com sucesso!</h4>
            <p>Redirecionando para a tela de login...</p>
        </div>
        <a href="login.php" class="btn btn-primary">Voltar agora</a>
    </div>
</div>

</body>
</html>