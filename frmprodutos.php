<?php
    include('conexao.php');
    try {
      $sql = "insert into tblprodutos (produto,preco,estoque) values (:produto,:preco,:estoque)";
      $stmt = $connect->prepare($sql);

      $stmt->bindValue(":produto",$_POST["produto"]);
      $stmt->bindValue(":preco",$_POST["preco"]);
      $stmt->bindValue(":estoque",$_POST["estoque"]);
      $stmt->execute();
      
    } catch(PDOException $e){
        echo "Produto não Cadastrado. ".$e->getmessage();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form method="post">
        Produto  <input type= "text" name="produto"><br>
        Preço    <input type= "text" name= "preco"><br>
        Estoque  <input type= "number" name= "estoque"><br>
        <br>
        <input type= "submit" value= "Cadastrar">
</form>
</body>
</html>