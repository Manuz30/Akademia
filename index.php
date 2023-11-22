<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/estilo.css" rel="stylesheet">
    <script src= "JavaScript/util.js"></script>
</head>
<body>
 
    <h1>Cadastro</h1>
    <h2>Novo produto</h2>
 
    <form method="POST">
 
        <label>Nome:</label>
        <input type="text" name="nome" minlength="3" required><br><br>
 
        <label>Email:</label>
        <input type="emial" name="email" minlength="3" required><br><br>
 
        <label>Data nascimento:</label>
        <input type="text" name="dtnascimento" minlength="3" required><br><br>
 
        <label>Cidade:</label>
        <input type="text" name="cidade" minlength="3" required><br><br>
 
        <label>Senha:</label>
        <input type="password" name="senha" minlength="3" required><br><br>
 
        <input type="submit" name="inserir" value="Cadastrar">
 
        <?php
 
            if ( isset($_REQUEST["Cadastrar"]) ) //evitar que o procedimento seja executado sem apertar o botão
            {
                include_once("class/usuario.php");
                $u = new  Usuario(); //criar objeto da classe Produto
                $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtnascimento"], $_REQUEST["cidade"], $_REQUEST["senha"]); // encapsular os valores do form no objeto produto
                
                echo $u->cadastrar() == true 

                 ?"<p>cadastrado com sucesso.</p>" 
                 :  "<p>Ocorreu um erro.</p>";
            }
        ?>
 
    </form>
    
</body>
</html>