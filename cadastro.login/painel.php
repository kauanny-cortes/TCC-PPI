<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .panel-card {
            background: #a8dfaa;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            animation: fadeIn 1s ease-in-out;
        }
        .panel-card i {
            font-size: 70px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .panel-card h2 {
            font-weight: bold;
            margin-bottom: 15px;
        }
        .btn-custom {
            background: #fff;
            border: 2px solid #000;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #dc3545;
            color: #fff;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="panel-card">
        <i class="fas fa-user-check"></i>
        <h2>Bem-vindo ao painel!</h2>
        <p>Login realizado com sucesso.</p>
        <a href="login.php" class="btn btn-custom mt-3"><i class="fas fa-sign-out-alt"></i> Sair</a>
    </div>
</body>
</html>
