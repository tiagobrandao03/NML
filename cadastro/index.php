<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';
include 'header.php';


$usuarioDao= new UsuarioDaoMysql($pdo);
    $lista = $usuarioDao->findAll();

?>
 <div class="container-fluid">
    <div style="background-color:#C4F1F3;width:100%;margin:auto;">
    <div class="row center " style="">
        <div class="col-md-3">
            <h1>Cadastro</h1>
        </div>
    </div>
    </div>
    </div>

    <div class="container-fluid " style="margin-top:40px;">
        <div class="row center">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="mb-3">
                        <label for="" class="form-label" >
                            Lista de Clientes: </label></br>
                            <hr>
                            <label for="" class="form-label" >
                            Nome do cliente: </br>
                            <input class="form-control " type="text" name="name" />
                            </label>
                    </div>
            </div>
        </div>
    </div>
    <div  style="margin: 0 auto;
	display: flex;justify-content: center;width:100%;">
        <a href="adicionar.php" class="btn btn-primary" style="margin:20px;">Fazer a Matricula</a>
    </div>
        <div class="container-fluid" style="margin: 0 auto;
	display: flex;justify-content: center;width:100%;">
            <div class="row ">
                <div class="col-md-12 col-sm-12 center">
                    <table border="1" style="    width: 700px;
    border: 1px solid grey;">
                        <tr>
                        
                            <th style="border: 1px solid grey;padding:20px;">NOME</th>
                            <th style="border: 1px solid grey;padding:20px;">EMAIL</th>
                            <th style="border: 1px solid grey;padding:20px;">cpf</th>
                            <th style="border: 1px solid grey;padding:20px;">Criado em</th>
                        </tr>
                        <?php foreach($lista as $usuario): ?>
                            <tr>

                                <td style="border: 1px solid grey;padding:20px;"><?=$usuario->getNome();?></td>
                                <td style="border: 1px solid grey;padding:20px;"><?=$usuario->getEmail();?></td>
                                <td style="border: 1px solid grey;padding:20px;"><?=$usuario->getCpf();?></td>
                                <td style="border: 1px solid grey;padding:20px;"><?=$usuario->getDatamatricula();?></td>
                            
                            <tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
<?php
    include 'footer.php';
?>