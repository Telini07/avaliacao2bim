<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listar Fluxo Caixa</title>
</head>
<body>
<?php
        include('conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div align="center">
    <h1>Consulta de Fluxo de Caixa</h1>
    <table border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Altera</th>
            <th>Exlcuir </th>
        </tr>

        <?php
            do{
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['data']."</td>";
            echo "<td>".$row['tipo']."</td>";
            echo "<td>".$row['valor']."</td>";
            echo "<td>".$row['historico']."</td>";
            echo "<td>".$row['cheque']."</td>";
            echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Deletar</td>";
            echo "</tr>";
            }while($row = mysqli_fetch_array($result))
        ?>
    </table>
    <br>
    <a href="index.php"><button>Voltar</button></a>
    </div>
</body>
</html>