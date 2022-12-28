<?php

    include_once('config.php');


    $sql = $pdo->prepare("SELECT * FROM usuarios");
    $sql->execute();
    $info = $sql ->fetchAll();

   




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style2.css" type="text/css" rel="stylesheet" />
</head>
<body>



<h4>
    <div class="cadanome">
   <?php
foreach ($info as $key => $value) {
    echo '<br>';
    
    echo 'Titulo: ' .$value['nome'];
    echo '<br />';
    echo 'Email: ' .$value['email'];
    echo '<hr>';
    
   }
   ?>
    </div>
</h4>









    
</body>
</html>