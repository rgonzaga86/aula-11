<?php
    include('conexao.php');
    try {
      $sql = "insert into tblvendedores (vendedor,datadeadmissao,Salario) values (:vendedor,:datadeadmissao,:salario)";
      $stmt = $connect->prepare($sql);

      $stmt->bindValue(":vendedor",$_POST["vendedor"]);
      $stmt->bindValue(":datadeadmissao",$_POST["datadeadmissao"]);
      $stmt->bindValue(":salario",$_POST["salario"]);
      $stmt->execute();
      
    } catch(PDOException $e){
        echo "Vendedor não Cadastrado. ".$e->getmessage();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendedor</title>
</head>
<body>
    <h1>Cadastro de Vendedor</h1>
    <form method="post">
        Vendedor <input type= "text" name="vendedor"><br>
        Data de Admissão  <input type= "date" name= "datadeadmissao"><br>
        Salario <input type= "text" name="salario"><br>
        <br>
        <input type= "submit" value= "Cadastrar">
</form>
</body>
</html>