<?php
require_once 'db.php';

$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string($_POST['email']);
$tipo = $conn->real_escape_string($_POST['tipo_doacao']);
$valor = isset($_POST['valor']) ? floatval($_POST['valor']) : null;
$descricao = $conn->real_escape_string($_POST['descricao'] ?? '');

$stmt = $conn->prepare("INSERT INTO doacoes (nome, email, tipo_doacao, valor, descricao) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssds", $nome, $email, $tipo, $valor, $descricao);

if ($stmt->execute()) {
    header("Location: index.html?status=sucesso");
    exit();
} else {
    header("Location: index.html?status=erro");
    exit();
}

$stmt->close();
$conn->close();
?>
