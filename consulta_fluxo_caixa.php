<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Fluxo Caixa</title>
</head>
<body>
    <h1>Consulta Fluxo de Caixa</h1>
    <hr>
<?php
        include('conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $tipo = $_POST['tipo']; 

        if($tipo == 'entrada') {
            $sql = "SELECT SUM(valor) FROM fluxo_caixa WHERE tipo = 'entrada'";
            $result = $con->query($sql);
        while($row = mysqli_fetch_array($result)){
            echo "DADO SOLICITADO: ". $row['SUM(valor)'];
        }
        } else if($tipo == 'saida') {
            $sql="SELECT SUM(valor) FROM fluxo_caixa WHERE tipo = 'saida'";
            $result = $con->query($sql);
        while($row = mysqli_fetch_array($result)){
            echo "DADO SOLICITADO: ". $row['SUM(valor)'];
        }
        } else if($tipo == 'saldo') {
            $sql="SELECT SUM(CASE WHEN tipo = 'entrada' THEN valor ELSE 0 END) - SUM(CASE WHEN tipo = 'saida' THEN valor ELSE 0 END)
            AS valor 
            FROM fluxo_caixa";
            $result = $con->query($sql);
            while($row = mysqli_fetch_array($result)){
                echo "DADO SOLICITADO: ". $row['valor'];
            }
        }

        

    ?>
    <br>
    <a href="consulta_fluxo_caixa.html"><button>Voltar</button></a>
    </div>    


</body>
</html>