<?php
    require_once 'models/Usuario.php';

    class UsuarioDaoMysql implements UsuarioDao{
        private $pdo;
        public function __construct(PDO $driver)
        {
            $this->pdo=$driver;
        }
        public function add(Usuario $u){
            $sql=$this->pdo->prepare("INSERT INTO usuarios(nome,email,cpf,estado,cep,cidade,nomecartao,numerocartao,codigoseguranca,datamatricula,endereco)VALUES(:nome,:email,:cpf,:estado,:cep,:cidade,:nomecartao,:numerocartao,:codigoseguranca,:datamatricula,:endereco)");
            $sql->bindValue(':nome',$u->getNome());
            $sql->bindValue(':email',$u->getEmail());
            $sql->bindValue(':cpf',$u->getCpf());
            $sql->bindValue(':estado',$u->getEstado());
            $sql->bindValue(':cep',$u->getCep());
            $sql->bindValue(':cidade',$u->getCidade());
            $sql->bindValue(':nomecartao',$u->getNomecartao());
            $sql->bindValue(':numerocartao',$u->getNumerocartao());
            $sql->bindValue(':codigoseguranca',$u->getCodigoseguranca());
            $sql->bindValue(':datamatricula',$u->getDatamatricula());
            $sql->bindValue(':endereco',$u-> getEndereco());
            $sql->execute();

            $u->setId( $this->pdo->lastInsertId() );
            return $u;
        }
        public function findAll(){
            $array=[];
            $sql=$this->pdo->query("SELECT * FROM usuarios");
            if($sql->rowCount() > 0){
                $data=$sql->fetchAll();

                foreach($data as $item){
                    $u = new Usuario();
                    $u->setId($item['id']);
                    $u->setNome($item['nome']);
                    $u->setEmail($item['email']);
                    $u->setEndereco($item['endereco']);;
                    $u->setCpf($item['cpf']);
                    $u->setEstado($item['estado']);
                    $u->setCep($item['cep']);
                    $u->setCidade($item['cidade']);
                    $u->setNomeCartao($item['nomecartao']);
                    $u->setNumeroCartao($item['numerocartao']);
                    $u->setCodigoseguranca($item['codigoseguranca']);
                    $u->setDatamatricula($item['datamatricula']);
                    $array[] = $u;
                }
            }
            return $array;
        }
        public function findByEmail($email){
            $sql=$this->pdo->prepare("SELECT * FROM usuarios WHERE email =:email");
            $sql->bindValue(':email',$email);
            $sql->execute();
            if($sql->rowCount() > 0){
                $data=$sql->fetch();

                $u = new Usuario();
                $u->setId($data['id']);
                $u->setNome($data['nome']);
                $u->setEmail($data['email']);
                $u->setEndereco($data['endereco']);;
                $u->setCpf($data['cpf']);
                $u->setEstado($data['estado']);
                $u->setCep($data['cep']);
                $u->setCidade($data['cidade']);
                $u->setNomeCartao($data['nomecartao']);
                $u->setNumeroCartao($data['numerocartao']);
                $u->setCodigoseguranca($data['codigoseguranca']);
                $u->setDatamatricula($data['datamatricula']);
                return $u;
            }else{
                return false;
            }
        }
        public function findById($id){
            $sql=$this->pdo->prepare("SELECT * FROM usuarios WHERE id =:id");
            $sql->bindValue(':id',$id);
            $sql->execute();
            if($sql->rowCount() > 0){
                $data=$sql->fetch();

                $u = new Usuario();
                $u->setId($data['id']);
                $u->setNome($data['nome']);
                $u->setEmail($data['email']);
                $u->setEndereco($data['endereco']);;
                $u->setCpf($data['cpf']);
                $u->setEstado($data['estado']);
                $u->setCep($data['cep']);
                $u->setCidade($data['cidade']);
                $u->setNomeCartao($data['nomecartao']);
                $u->setNumeroCartao($data['numerocartao']);
                $u->setCodigoseguranca($data['codigoseguranca']);
                $u->setDatamatricula($data['datamatricula']);
                return $u;
            }else{
                return false;
            }
        }
        // public function findByDataMatricula($datamatricula){

        // }
        public function update(Usuario $u){
            $sql=$this->pdo->prepare("UPDATE usuarios SET nome=:nome,email=:email WHERE id=:id");
            $sql->bindValue(':nome',$u->getNome());
            $sql->bindValue(':email',$u->getEmail());
            $sql->bindValue(':cpf',$u->getCpf());
            $sql->bindValue(':estado',$u->getEstado());
            $sql->bindValue(':cep',$u->getCep());
            $sql->bindValue(':cidade',$u->getCidade());
            $sql->bindValue(':nomecartao',$u->getNomecartao());
            $sql->bindValue(':numerocartao',$u->getNumerocartao());
            $sql->bindValue(':codigoseguranca',$u->getCodigoseguranca());
            $sql->bindValue(':datamatricula',$u->getDatamatricula());
            $sql->bindValue(':endereco',$u-> getEndereco());
            $sql->bindValue(':id',$u->getId());
            $sql->execute();

            return true;
        }
        public function delete($id){
            $sql=$this->pdo->prepare("DELETE FROM usuarios WHERE id=:id");
            $sql->bindValue(':id',$id);
            $sql->execute();
        }

    }
