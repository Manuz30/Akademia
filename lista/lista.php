<?php

        public function inserirUsuario()
        {
            include("db/conn.php");
            $sql = "CALL piProduto(:nome,:email,:dtnascimento,:cidade,:senha,)";


            $data = [
                'nome' => $this->nome,
                
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;

        }

        public function listarProduto()
        {
            include("db/conn.php");

            $sql = "CALL psListarProduto('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }

    }

?>