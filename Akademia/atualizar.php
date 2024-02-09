<?php
  include_once("usuario.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src= "JavaScript/util.js"></script>
    <link href="styleee.css" rel="stylesheet">
</head>
<body>
    <?php

        $p = new Usuario();
        $p->buscarUsuario($_GET["pid"]);

        echo "
            <form method='POST'>

            <label>ID:</label>
            <input type='text' name='id' value='" . $_GET["pid"] . "' readonly><br><br>

            <label>Nome:</label>
            <input type='text' name='nome' minlength='3' value='" . $p->getNome() . "' required><br><br>

            <label>Email:</label>
            <input type='text' name='email' minlength='3' value='" . $p->getEmail() . " ' required><br><br>

            <label>Data de Nascimento:</label>
            <input type='text' name='dtnascimento' minlength='3' value='" . $p->getDtNascimento() . " ' required><br><br>

            <label>Cidade:</label>
            <input type='text' name='cidade' minlength='3' value='" . $p->getCidade() . " ' required><br><br>

            <label>Senha:</label>
            <input type='password' name='senha' minlength='3' value='" . $p->getSenha() . " ' required><br><br>

            
            <label>Comfirmar Senha:</label>
            <input type='password' name='comfirmar senha' minlength='3' value='" . $p->getSenha() . " ' required><br><br>

            <input type='submit' name='atualizar' value='Atualizar'>
        ";

        if ( isset($_REQUEST["atualizar"]) ) //evitar que o procedimento seja executado sem apertar o botão
        {
           
            $p->setNome($_REQUEST["nome"]);
            $p->setEmail($_REQUEST["email"]);
            $p->setDtNascimento($_REQUEST["dtNascimento"]);
            $p->setCidade($_REQUEST["cidade"]);
            $p->setSenha($_REQUEST["senha"]);

            echo $p->atualizarUsuario($_REQUEST["id"]) == true ?
                    "<p>Usuario atualizado.</p>" :
                    "<p>Ocorreu um erro.</p>";
        }
    ?>

</form>
</body>
</html>