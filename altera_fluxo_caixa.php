<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa where id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Fluxo de Caixa</title>
</head>
<body>
    
<h1>Cadastro de Fluxo de Caixa</h1>

<form action="altera_fluxo_caixa_exe.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id']?>">
<div>    
    <label>Data: </label>
    <input type="date" name="data" id="data">
</div>
<br>
<div>    
    <label>Tipo: </label>
    <input type="radio" name="tipo" id="tipo" value="entrada">
    <label>Entrada</label>
    <input type="radio" name="tipo" id="tipo" value="saida">
    <label>Saída</label>
</div>
<br>
<div>    
    <label>Valor: </label>
    <input type="text" name="valor" id="valor">
</div>
<br>
<div>    
    <label>Histórico: </label>
    <input type="text" name="historico" id="historico">
</div>
<br>
<div>    
    <label for="cheque">Cheque</label>
    <select name="cheque" id="cheque">
      <option value="sim">Sim</option>
      <option value="nao">Não</option>
    </select>
</div>
<br>
<input type="submit" value="Salvar">
</form>
<br>
<a href = "listar_fluxo_caixa.php"><button>Voltar</button></a>
</body>
</html>