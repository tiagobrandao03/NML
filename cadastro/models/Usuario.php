<?php

    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $cpf;
        private $estado;
        private $cep;
        private $cidade;
        private $nomecartao;
        private $numerocartao;
        private $codigoseguranca;
        private $datamatricula;
        private $endereco;
        

        public function getId(){
            return $this->id;
        }

        public function setId($i){
            $this->id=trim($i);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            $this->nome=ucwords(trim($n));
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email=strtolower(trim($e));
        }
        public function getEndereco(){
            return $this->endereco;
        }

        public function setEndereco($i){
            $this->endereco=trim($i);
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($i){
            $this->cpf=trim($i);
        }
        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($i){
            $this->estado=trim($i);
        }
        public function getCep(){
            return $this->cep;
        }

        public function setCep($i){
            $this->cep=trim($i);
        }
        public function getCidade(){
            return $this->cidade;
        }

        public function setCidade($i){
            $this->cidade=trim($i);
        }
        public function getNomecartao(){
            return $this->nomecartao;
        }

        public function setNomeCartao($i){
            $this->nomecartao=trim($i);
        }
        public function getNumerocartao(){
            return $this->numerocartao;
        }

        public function setNumeroCartao($i){
            $this->numerocartao=trim($i);
        }
        public function getCodigoseguranca(){
            return $this->codigoseguranca;
        }

        public function setCodigoseguranca($i){
            $this->codigoseguranca=trim($i);
        }
        public function getDatamatricula(){
            return $this->datamatricula;
        }

        public function setDatamatricula($i){
            $this->datamatricula=trim($i);
        }
    }

    interface UsuarioDao{
        public function add(Usuario $u);
        public function findAll();
        public function findByEmail($email);
        public function findById($id);
        // public function findByDataMatricula($datamatricula);
        public function update(Usuario $u);
        public function delete($id);
    }
?>