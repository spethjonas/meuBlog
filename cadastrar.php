<!DOCTYPE html>
<html Long="pt-br">
<head>
    <meta charset = "UTF-8">
    <title>Cadastrar</title>
</head>
<body>
    
            <header id="header">  
                <div class="menu">
                    <h2>Blog</h2>
                    <h2><a href="index.php">Inicio</a></h2>
                </div>
                <h1>Cadastrar Notícias</h1>
            </header>
            <br><br><br>
            
            <main id="main"> 
                <form class="form" method="POST"  action="cadastrar_action.php">
                    <div class="input-search">
                        <label for="inputNotice">Título da notícia:</label>
                        <input type="text" name="notice" id="inputNotice" >
                    </div>
                    <br><br><br>
                    <div class="input-search">
                        <label for="inputDescription">Descrição da notícia:</label>
                        <textarea type="text" name="description" rows="5" id="inputDescription" ></textarea>
                        <br><br><br>
                        <div class="input-search">
                            <input type="submit" value="Cadastrar">
                        </div>
                    </div>
                </form>
            </main>
            
            <br><br><br><br><br><br><br><br>
            <div class="menu">
                <span>&copy; 2022 Copyright - Todos os direitos reservados.</span>
                <span>Powered by Jonas</span>
            </div>
       
  
</body>
</html>