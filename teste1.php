          <section class="gestao-espacamento" style="z-index: -2;">
            <div class="sessao-principal" style="">
                <!-- começo section -->
                <section style="background-color: rgb(255, 255, 255);">
                <!-- padding-bottom: 40px;background-color: rgb(51, 133, 255); -->
                
                <div class="artigos cont1 " style="background-color: rgb(255, 255, 255); z-index:-2;">

                        <article class="article_format_b">
                          <div class="artigos_c cont1">
                            <table class="">
                              <thead>
                                <tr>
                                  <th scope="">Lote</th>
                                  <th scope=""><?=$leilao->lote;?></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="">Encerramento</th>
                                  <td><?=$leilao->dateTimeFormat('data_fim');?></td>
                                </tr>
                                <tr>
                                  <th scope="">Valor Inicial</th>
                                  <!-- $leilao->valor_inicial; -->
                                  <td>R$<?=number_format($leilao->valor_inicial, 2, ',','.')?></td>
                                </tr>
                                <tr>
                                  <th scope="">
                                    Incremento
                                  </th>
                                  <td><?=$leilao->salto_lance;?></td>
                                </tr>
                                <tr>
                                  <th scope="">Arrematado por </th>
                                  <td><?=$leilao->arrematado_por;?></td>
                                </tr>
                                <tr>
                                  <th scope="">Valor Arrematado</th>
                                  <td><?=$leilao->valor_arrematado;?></td>
                                </tr>
                                <tr>
                                  <th scope="">Processo</th>
                                  <td><?=$leilao->processo;?></td>
                                </tr>
                                <tr>
                                  <th scope="">Descrição</th>
                                  <td><?=$leilao->descricao;?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="artigos_c cont1">
                            <table class="">
                              <thead>
                                <tr>
                                  <th scope="" class="definicao border border-white bg-secondary text-white" style="">Usuario</th>
                                  <th scope="" class="td_defini border border-white bg-secondary text-white">Data</th>
                                  <th scope="" class="td_defini border border-white bg-secondary text-white">Valor</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                                $lances= Lance::findAll([
                                    "leilao_id"=>$id
                                ]);

                                while($lance=$lances->fetch()){
                                     /**
    * @var mixed $id;
    * @var mixed $data_create;
    * @var mixed $usuario_id;
    * @var mixed $cliente_id;
    * @var mixed $leilao_id;
    * @var mixed $valor; */
                              ?>
                                <tr>
                                  <th scope="" class="definicao border border-secondary"  style=""><?=$lance->nome;?></th>
                                  <td class="td_defini border border-secondary" style=""><?=$lance->data_create;?></td>
                                  <td class="td_defini border border-secondary" style="">R$<?=$lance->valor;?></td>
                                </tr>
                               <?php
                               }
                               ?>
                              </tbody>
                            </table>
                          </div>
                        </article>
                      </div>
                   
                    </div>
                </article> 
                </div>
                <!-- fim div -->
            </div>
             </div>
          </section>