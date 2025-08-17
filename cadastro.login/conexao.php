<?php
$host = "localhost";
$usuario = "root"; // padrão do XAMPP
$senha = ""; // padrão do XAMPP
$banco = "sistema_login";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
