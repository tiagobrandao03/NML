<?php
include 'header.php';
?>

    <div class="container-fluid">
    <div style="background-color:#C4F1F3;width:100%;margin:auto;">
    <div class="row center " style="">
        <div class="col-md-3 col-sm-12">
            <h1>Cadastro</h1>
        </div>
    </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
        <section class="artigos cont1 ">
            <div class="article_format">
       
                <form method="POST" action="adicionar_action.php">
                    <div class="mb-3">
                        <label for="" class="form-label" >
                            Nome: </br>
                            <input class="form-control " type="text" name="name"/>
                        </label>
                    </div>
                    <div class="mb-3">
                    <label for="" class="form-label" >
                        Email: </br>
                        <input class="form-control" type="email" name="email"/>
                    </label>
                    </div>
                            <div class="mb-3">
                            <label for="" class="form-label">
                                CPF: </br>
                                <input class="form-control" type="text" name="cpf" placeholder="111.111.111-01"/>
                            </label>
                            </div>
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-2 ">
                                <label  class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="endereco" placeholder="Rua, numero, Bairro">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class=" " style="margin-top: 0px!important;">
                                <label  class="form-label">Estado</label>
                                <input type="text" class="form-control" name="estado" placeholder="Escreva seu estado">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-3">
                            <label for="" class="form-label">
                                CEP: </br>
                                <input class="form-control" type="text" name="cep" placeholder="22.222-000"/>
                            </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 0px!important;">
                            <div class="" >
                                <label  class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="cidade" placeholder="selecione sua cidade">
                            </div>
                        </div>
                    </div>


                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-5 mt-1 ">
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">cartão de credito</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-5 mt-1 ">
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Boleto bancario</label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-3">
                            <label for="" class="form-label">
                                Nome do Cartao: </br>
                                <input class="form-control" type="text" name="nomecartao" placeholder="Nome impresso no cartão"/>
                            </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="example">Data </label>
                            <div class="" style="    margin-top: 0px!important;">
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                            <input placeholder="Select date" type="text" id="example" class="form-control">
                           
                            <i class="fas fa-calendar input-prefix" tabindex=0></i>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-3">
                            <label for="" class="form-label">
                            Numero do cartao: </br>
                                <input class="form-control" type="text" name="nomecartao" placeholder="5555 5555 5555 5555 "/>
                            </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="" style="    margin-top: 0px!important;">
                                <label  class="form-label" >Codigo de Segurança:</label>
                                <input type="text" class="form-control" name="numerocartao" placeholder="xxx">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="" style="    margin-top: 0px!important;">
                                <label  class="form-label" >Seu cartão será debitado em R$49,00:</label>
                            </div>
                        </div>
                    <button type="submit" value="" style="color: #fff;" class="btn btn-primary">Realizar Matricula</button>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="" style="    margin-top: 0px!important;">
                                <label  class="form-label" style="font-size: 12px;" >informações seguras e criptografadas</label>
                            </div>
                        </div>
                </form>
            </div>
        </section>
</div>
<?php
include 'footer.php';
?>