<?php
require_once "conecta.php";
$conexao = conectar();

$id_produto = $_POST['id_produto'];
$nome = $_POST['nome'];
$quant = $_POST['quantidade'];

$sql = "UPDATE produto SET nome='$nome', quantidade='$quant' WHERE id_produto=$id_produto";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}