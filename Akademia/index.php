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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&family=Jost:wght@300&family=Julius+Sans+One&family=Poppins:wght@300&family=Roboto:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
</head>
<body>

<header>
        <div class="menu">
        <a>Início</a>
        <a>Modalidades</a>
        <a>Planos</a>
        <a>Eventos</a>
        <a>Área restrita</a>

    </div>
    <div class="foto">
    
    </div>
    </header>
 
 <div id="cadastre">
    <h1>Cadastre-se aqui</h1>
</div>

<div class="caixa">

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
 
        <label>Comfirma sua senha:</label><br>
        <input type="password" placeholder="Repita sua senha" name="senha" minlength="3" required><br><br>

        <input type="submit" name="inserir" value="Cadastrar">
 
    </div>

<div class="imagemmoco">
    <img src="img/mocodocadastro.png"  width="590px" height="900px" alt="moço treinando"/>
</div>

</div>


        <?php
 
            if ( isset($_REQUEST["inserir"]) ) 
            {
                include_once("usuario.php");
                $u = new  Usuario(); 
                $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtnascimento"], $_REQUEST["cidade"], $_REQUEST["senha"]); 
                
                echo $u->inserirUsuario() == true 

                 ?"<p>cadastrado com sucesso.</p>" 
                 :  "<p>Ocorreu um erro.</p>";
            }
        ?>
 
    </form>
    
    <footer> 

    <p>Desenvolvido por Manu, 2023. Técnico em Informática - Senac Santo </p>

    </footer>




</body>
</html>


