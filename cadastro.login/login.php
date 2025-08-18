<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hash);
        $stmt->fetch();
        if (password_verify($senha, $hash)) {
            header("Location: painel.php");
exit();

        } else {
            echo "<script>alert('❌ Senha incorreta!');</script>";
        }
    } else {
        echo "<script>alert('❌ Usuário não encontrado!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <nav class="navbar navbar-light" style="background-color: #a8dfaa;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
        </div>
    </nav>

    
    <div class="custom-container">
        <div class="card-custom">
            <h2><i class="fas fa-sign-in-alt"></i> Login</h2>
            <form method="POST">
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn btn-custom w-100"><i class="fas fa-arrow-right"></i> Logar</button>
                <p class="mt-3 text-center">Não tem conta? <a href="cadastro.php" class="text-dark fw-bold">Cadastre-se</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

