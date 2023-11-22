
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


          include_once("usuario.php");
          $u = new  Usuario(); 
          $lista = $u-> ListarUsuarios();

          echo "<table>

          <tr>
             
               <th>nome</th>
               <th>email</th>
               <th>dtNascimento</th>
               <th>cidade</th>
               <th>senha</th>
            
               </tr>";

        foreach ($lista as $item) 
        {

            echo "

            <tr>
               
                 <td>" . $item ["nome"] . "</td>
                 <td>" . $item ["email"] . "</td>
                 <td>" . $item ["dtNascimento"] . "</td>
                 <td>" . $item ["cidade"] . "</td>
                 <td>" . $item ["senha"] . "</td>
                 <td> <a href='deleteUsuario.php?pid=" . $item["idUsuario"] .  "' onClick='return confirmar()'>Excluir</a> </td>     
                     
            </tr>";       
                
        }

                  echo "</table>"

?>



</body>
</html>