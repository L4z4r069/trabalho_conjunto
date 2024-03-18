<?php
$id_produto = $_GET['id_produto'];
require_once "conecta.php";
$conexao = conectar();
$sql = "SELECT * FROM produto WHERE id_produto = $id_produto";
$result = mysqli_query($conexao, $sql);

if ($result) {
    $id_produto = mysqli_fetch_assoc($result);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    die();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form action="alterar.php" method="post">
        ID Produto: <input type="number" name="id_produto" value="<?= $id_produto['id_produto'] ?>"><br>
        Nome: <input type="text" name="nome" value="<?= $id_produto['nome'] ?>"><br>
        Quantidade: <input type="number" name="quantidade" value="<?= $id_produto['quantidade'] ?>"><br>
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>