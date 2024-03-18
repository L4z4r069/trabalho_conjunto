<?php
require_once "conecta.php";
$conexao = conectar();
$sql = "SELECT * FROM produto";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $produtos = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>

<body>
    <a href="crud.php" > Cadastrar </a>
    <form action="crud.php" method="post">
        <table>
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> Quantidade </th>
                    <th colspan="2"> Opções </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($produtos as $produto) {
                    echo '<tr>';
                    echo "<td>" . $produto['nome'] . "</td>";
                    echo "<td>" . $produto['quantidade'] . "</td>";
                    echo '<td><a href="form.php?id_produto=' .
                        $produto['id_produto'] . '">Alterar</a></td>';
                    echo '<td><a href="excluir.php?id_produto=' .
                        $produto['id_produto'] . '">Excluir</a></td>';
                }
                '</tr>';
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>