<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (email, senha) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);

    if ($stmt->execute()) {
        header("Location: sucesso.php");
exit();

    } else {
        echo "<script>alert('❌ Erro: Email já cadastrado!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light" style="background-color: #a8dfaa;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3" href="#"><i class="fas fa-user-plus"></i> Cadastro</a>
        </div>
    </nav>

    <!-- Formulário -->
    <div class="custom-container">
        <div class="card-custom">
            <h2><i class="fas fa-user-plus"></i> Cadastro</h2>
            <form method="POST">
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn btn-custom w-100"><i class="fas fa-check"></i> Cadastrar</button>
                <p class="mt-3 text-center">Já tem conta? <a href="login.php" class="text-dark fw-bold">Login</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
