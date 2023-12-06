<?php
 
    
    class Usuario
    {
 
        private $nome;
        private $email;
        private $dtnascimento;
        private $cidade;
        private $senha;
 
        public function __construct(){}
 
        public function create($_nome, $_email, $_dtnascimento,$_cidade,$_senha,)
        {
            $this->nome = $_nome;
            $this->email = $_email;
            $this->dtnascimento = $_dtnascimento;
            $this->cidade = $_cidade;
            $this->senha = $_senha;
        }


        public function getNome()
        {
            return $this->nome;
        }


        public function setNome()
        {
            $this->nome = $_nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail()
        {
            $this->nome = $_email;
        }

        public function getDtNascimento()
        {
            return $this->dtNascimento;
        }

        public function setDtNascimento()
        {
            $this->nome = $_dtNascimneto;
        }

        public function getCidade()
        {
            return $this->cidade;
        }

        public function setCidade()
        {
            $this->nome = $_cidade;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha()
        {
            $this->nome = $_senha;
        }
 
        public function inserir()
        {
            include("db/conn.php");
            $sql = "CALL inserir (:nome, :email, :dtnascimento, :cidade, :senha)";
 
            $data = [
                'nome' => $this->nome,
                'email' => $this->email,
                'dtnascimento' => $this->dtnascimento,
                'cidade' => $this->cidade,
                'senha' => $this->senha
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($data);
           
  
            return true;
 
        }


        public function ListarUsuarios()
        {
            include("db/conn.php");

            $sql = "CALL psListarUsuario('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }

    
            public function inserirUsuario()

    {
              include("db/conn.php");
              $sql = "CALL piUsuario(:)";
              $data = $conn->query($sql)->fetchAll();

             return $data;

    }
            public function deleteUsuario($_id)
            {

                include("db/conn.php");
                $sql = "CALL deleteUsuario(:id)";
     
                $data = [

                   "id" => $_id
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

    

        public function Login ($_email,$_senha)
        {

            include("db/conn.php");
            $sql = "CALL piLoginUsuario('$_email', '$_senha')";
            $stmt = $conn->prepare($sql);

            $stmt->execute(); 
            
            if ($user = $stmt->fetch()) 
            {
                $this->nome = $user["nome"];
                return 1;
            }
            else
            {
                return 0;
            }
        }
    }
?>