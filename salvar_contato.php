<?php
require_once 'db.php';

$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string($_POST['email']);
$mensagem = $conn->real_escape_string($_POST['mensagem']);

$stmt = $conn->prepare("INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $mensagem);

if ($stmt->execute()) {
    echo json_encode(["sucesso" => true, "mensagem" => "Mensagem enviada!"]);
} else {
    echo json_encode(["sucesso" => false, "mensagem" => "Erro ao salvar."]);
}

$stmt->close();
$conn->close();
?>
