<?php

    require_once('Conexao.php');
  
    class Usuario
    {
        // atributos
        private $idUsuario;
        private $nomeUsuario;
        private $loginUsuario;
        private $senhaUsuario;

        // Getters
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }
        public function getLoginUsuario(){
            return $this->loginUsuario;
        }
        public function getSenhaUsuario(){
            return $this->senhaUsuario;
        }

        // Setters
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }
        public function setNomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }
        public function setLoginUsuario($loginUsuario){
            $this->loginUsuario = $loginUsuario;
        }
        public function setSenhaUsuario($senhaUsuario){
            $this->senhaUsuario = $senhaUsuario;
        }

        // métodos
        public function cadastrar($usuario){
            $con = Conexao::conectar();
            
            $stmt = $con->prepare("INSERT INTO tbUsuario(nomeUsuario, emailUsuario, senhaUsuario)
                                    VALUES (?,?,?)");
            $stmt->bindValue(1, $usuario->getNomeUsuario());
            $stmt->bindValue(2, $usuario->getLoginUsuario());
            $stmt->bindValue(3, $usuario->getSenhaUsuario());  

            $stmt->execute();
        }
        public function alterar($usuario){
            $con = Conexao::conectar();

            $stmt = $con->prepare("UPDATE tbUsuario SET senhaUsuario = ? where emailUsuario = ?");
            $stmt->bindValue(1, $usuario->getSenhaUsuario());
            $stmt->bindValue(2, $usuario->getLoginUsuario());

            $stmt->execute();
        }
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbUsuario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }

?>