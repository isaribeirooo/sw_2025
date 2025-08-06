<?php
require 'conexao.php';
$nome = "Dom casmurro";
$preco = 59.99;
$estoque = 15;
$sql = "INSERT INTO livro (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':estoque', $estoque);
if ($stmt->execute()) {
echo "livro inserido com sucesso!";
} else {
echo "Erro ao inserir livro.";
}
?>