<?php

    require "conn.php";

    $sql = $pdo->query("SELECT * FROM notices ORDER BY id DESC");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

?>

<!DOCTYPE html>
<html Long="pt-br">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
</head>
<body> 
        <header id="header">
            
            <div class="menu">
                <h2>Meu Blog</h2>
                <br><br>
                <h2><a href="cadastrar.php">Cadastrar</a></h2>
            </div>

            
        </header>
        <br><br><br>
        <?php foreach ($lista as $notice): ?>    
            <div class="post">
                <div class="top-post menu">
                    <br><br>
                    <span><?= date_format(new DateTime($notice['date_create']), 'd/m/Y'); ?></span>
                </div>
                <div class="content-post">
                    <h3><?= $notice['title_notice']; ?></h3>
                    <p><?= $notice['description_notice']; ?></p>
                </div>    
            </div>
        <?php endforeach; ?>    
       
            <br><br><br><br><br><br>
            <div class="menu">
                <span>&copy; 2023 Copyright - Todos os direitos reservados.</span>
                <span>Powered by Jonas</span>
            </div>

</body>
</html>