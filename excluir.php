<?php
require_once "conecta.php";
$conexao = conectar();

$id_produto = $_GET['id_produto'];

$sql = "DELETE FROM produto WHERE id_produto=$id_produto";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}