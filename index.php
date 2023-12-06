<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/estilo.css" rel="stylesheet">
    <script src= "JavaScript/util.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
 
    <h1>Cadastre-se aqui</h1>

    <div id="cadastro">

    <form method="POST">
 
        <label>Nome:</label><br> 
        <input type="text" placeholder= "Informe seu nome completo" name="nome" minlength="3" required><br><br>
 
        <label>Email:</label><br>
        <input type="emial" placeholder="Informe seu e-mail" name="email" minlength="3" required><br><br>
 
        <label>Data nascimento:</label><br>
        <input type="text" placeholder="Informe sua data de nascimento" name="dtnascimento" minlength="3" required><br><br>
 
        <label>Cidade:</label><br>
        <input type="text" placeholder="Informe sua cidade"  name="cidade" minlength="3" required><br><br>
 
        <label>Senha:</label><br>
        <input type="password" placeholder="Informe uma senha com 8 caracteres ou mais" name="senha" minlength="3" required><br><br>
 
        <input type="submit" name="inserir" value="Cadastrar">
 
    </div>

        <?php
 
            if ( isset($_REQUEST["inserir"]) ) 
            {
                include_once("usuario.php");
                $u = new  Usuario(); 
                $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtnascimento"], $_REQUEST["cidade"], $_REQUEST["senha"]); 
                
                echo $u->inserir() == true 

                 ?"<p>cadastrado com sucesso.</p>" 
                 :  "<p>Ocorreu um erro.</p>";
            }
        ?>
 
    </form>
    
</body>
</html>