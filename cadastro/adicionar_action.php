<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao= new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco');
$cpf = filter_input(INPUT_POST, 'cpf');
$estado = filter_input(INPUT_POST, 'estado');
$cep = filter_input(INPUT_POST, 'cep');
$cidade = filter_input(INPUT_POST, 'cidade');
$nomecartao = filter_input(INPUT_POST, 'nomecartao');
$numerocartao = filter_input(INPUT_POST, 'numerocartao');
$codigoseguranca = filter_input(INPUT_POST, 'codigoseguranca');
$datamatricula = filter_input(INPUT_POST, 'datamatricula');


if($name && $email){
    if($usuarioDao->findByEmail($email)=== false){
        $novoUsuario= new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);
        $novoUsuario->setEndereco($endereco);
        $novoUsuario->setCpf($cpf);
        $novoUsuario->setEstado($estado);
        $novoUsuario->setCep($cep);
        $novoUsuario->setCidade($cidade);
        $novoUsuario->setNomeCartao($nomecartao);
        $novoUsuario->setNumeroCartao($numerocartao);
        $novoUsuario->setCodigoseguranca($codigoseguranca);
        $novoUsuario->setDatamatricula($datamatricula);
        $usuarioDao-> add($novoUsuario);

        header("Location: index.php");
        exit;
    }else{
        header("Location: adicionar.php");
        exit;
    }
}else{
    header("Location: adicionar.php"); 
    exit;
}
