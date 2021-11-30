<?php
    include('conexao.php');
    try {
      $sql = "insert into tblclientes (cliente,email) values (:cliente,:email)";
      $stmt = $connect->prepare($sql);

      $stmt->bindValue(":cliente",$_POST["cliente"]);
      $stmt->bindValue(":email",$_POST["email"]);
      $stmt->execute();
      
    } catch(PDOException $e){
        echo "Cliente não Cadastrado. ".$e->getmessage();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form method="post">
        cliente <input type= "text" name="cliente"><br>
        E-mail  <input type= "e-mail" name= "email"><br>
        <br>
        <input type= "submit" value= "Cadastrar">
</form>
</body>
</html>