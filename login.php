<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Barbearia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head> 

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    
                    <!-- Ícone centralizado -->
                    <div class="text-center mb-3">
                        <i class="fas fa-scissors fa-3x text-primary"></i>
                    </div>

                    <h4 class="card-title text-center mb-4">Login do Barbeiro</h4>

                    <?php
                    if (isset($_SESSION['erro_login'])) {
                        echo "<div class='alert alert-danger text-center'>" . $_SESSION['erro_login'] . "</div>";
                        unset($_SESSION['erro_login']);
                    }
                    ?>

                    <form action="autenticar.php" method="post">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuário</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" required>
                        </div>
                        <input type="submit" value="Entrar" class="btn btn-primary w-100">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
