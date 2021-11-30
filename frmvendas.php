<?php
    include('conexao.php');
    try {
      $sql = "insert into tblvendas (idvendedor,idproduto,quantidade) values (:idvendedor,:idproduto,:quantidade)";
      $stmt = $connect->prepare($sql);

      
      $stmt->bindValue(":idvendedor",$_POST["idvendedor"]);
      $stmt->bindValue(":idproduto",$_POST["idproduto"]);
      $stmt->bindValue(":quantidade",$_POST["quantidade"]);
      $stmt->execute();
      
    } catch(PDOException $e){
        echo "Venda não Cadastrada. ".$e->getmessage();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
</head>
<body>
    <h1>Cadastro de Vendas</h1>
    <form method="post">
        Vendedor <input type= "text" name="idvendedor"><br>
        Produto  <input type= "text" name= "idproduto"><br>
        Quantidade  <input type= "number" name= "quantidade"><br>
        <br>
        <input type= "submit" value= "Cadastrar">
</form>
</body>
</html>