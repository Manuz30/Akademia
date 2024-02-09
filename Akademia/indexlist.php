
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


          include_once("usuario.php");
          $u = new  Usuario(); 
          $lista = $u->listarUsuario();

          echo "<table>

          <tr>
             
               <th>nome</th>
               <th>email</th>
               <th>dtNascimento</th>
               <th>cidade</th>
            
               </tr>";

        foreach ($lista as $item) 
        {

            echo "

            <tr>
               
                 <td>" . $item ["nome"] . "</td>
                 <td>" . $item ["email"] . "</td>
                 <td>" . $item ["dtNascimento"] . "</td>
                 <td>" . $item ["cidade"] . "</td>
                 <td> <a href='deleteUsuario.php?pid=" . $item["idUsuario"] .  "' onClick='return confirmar()'>Excluir</a> </td>     
                 <td> <a href='atualizar.php?pid=" . $item["idUsuario"] .  "' >Atualizar</a> </td>     
                     
            </tr>";       
                
        }

                  echo "</table>"

?>



</body>
</html>