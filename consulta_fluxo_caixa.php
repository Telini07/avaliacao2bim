<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Fluxo Caixa</title>
</head>
<body>
<?php
        include('conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];   

        if($tipo == 'entrada') {
            $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
        } else if($tipo == 'saida') {
            $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
        } else if($tipo == 'saldo') {
            $sql="select sum(case when tipo = 'entrada' then valor else 0 end) - sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";
        }
    ?>
    <br>
    <a href="index.php"><button>Voltar</button></a>
    </div>    


</body>
</html>