<?php
  $sectionTitle = array("Bernardo Joaquim"  => "23 anos");
  $breadCrumb = array("Inicio", "rounds", "Samaritano");
  $roundDetails = array("");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <?php require '../shared/head.php'; ?>
  <body class="menu-open">
    <?php require '../shared/navibar-top.php'; ?>
    <?php require '../shared/menu-left.php'; ?>
    <?php require '../shared/task-box.php'; ?>

    <div class="container-fluid" id="pageContent">     
      <?php include '../shared/top-page.php'; ?>
     
      <!--novo exame-->
      <div class="row">
        <!-- Nav tabs -->
        <div class="table-responsive">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#evolucao" data-toggle="tab">EVOLUÇÃO CLÍNICA</a>
            </li>
            <li>
              <a href="#balanco" data-toggle="tab">BALANÇO</a>
            </li>
            <li>
              <a href="#exames" data-toggle="tab">EXAMES</a>
            </li>
            <li>
              <a href="#tarefas" data-toggle="tab">TAREFAS</a>
            </li>
            <li>
              <a href="#detalhes" data-toggle="tab">DETALHES</a>
            </li>
          </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">

          <!--evolução-->
          <div class="tab-pane fade active" id="evolucao">
            <div class="col-lg-12">
              <div class="textarea-rich">
                <div class="menu">
                  <a href="#"><span class="glyphicon glyphicon-bold"></span></a>
                  <a href="#"><span class="glyphicon glyphicon-italic"></span></a>
                  <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                </div>
                <textarea class="form-control" rows="5" placeholder="Digite aqui a sua mensagem"></textarea>
              </div>
            </div>
            <div class="spacer md"></div>
            <div class="col-lg-offset-8 col-md-offset-6 col-md-3 col-lg-2">
              <button class="btn btn-block btn-danger">
                <span class="glyphicon glyphicon-paperclip"></span>
                Anexar Arquivo
              </button>
              <div class="spacer md hidden-md hidden-lg"></div>
            </div>
            <div class="col-md-3 col-lg-2">
              <button class="btn btn-block btn-success">Enviar Mensagem</button>
            </div>
            <div class="spacer lg"></div>
  
            <div class="col-lg-12 ">   
              <!--dia 01-->
              <div class="day">
                <div class="alert alert-info">
                  <h4>D12<small>TOT D62 06/04/2015</small></h4>
                  <ul class="prescription">
                    <li>
                      <h5>Acessos</h6>
                      <p>D62 323</p>
                    </li>
                    <li>
                      <h5>Drenos</h6>
                      <p>D62 2323</p>
                    </li>
                    <li>
                      <h5>Antibióticos</h6>
                      <p>D39 metronidazol</p>
                      <p>D39 metronidazol</p>
                    </li>
                    <li>
                      <h5>Infusões</h6>
                      <p>noradrelina 1 ml/h</p>
                      <p>noradrelina 1 ml/h</p>
                    </li>
                  </ul>
                  <div class="spacer"></div>
                </div>
                <ul class="messages">
                  <!--Mensagem 01-->
                  <li>
                    <div class="user-image">
                      <div class="status online"></div>
                      <img src="http://localhost/medvelox/assets/img/dr-paulo-niemayer.jpg" class="thumbnail-user img-circle">
                    </div>
                    <div class="message-info">
                      <h4 class="no-margin">Dra. Cláudia Miranda</h4>
                      <p class="text-muted no-margin"><small>06/04/2015 as 22:12 - Sobre Bernardo Joaquim</small></p>
                      <p>Roberto, eu olhei os resultados, estou um pouco preocupada também mas vamos aguardar mais 12h</p>
                    </div>
                    <div class="spacer"></div>
                  </li>
                  <!--/ Mensagem 01-->
                  <!--Mensagem 02-->
                  <li>
                    <div class="user-image">
                      <div class="status offline"></div>
                      <img src="http://localhost/medvelox/assets/img/dr-paulo-niemayer.jpg" class="thumbnail-user img-circle">
                    </div>
                    <div class="message-info">
                      <h4 class="no-margin">Dra. Cláudia Miranda</h4>
                      <p class="text-muted no-margin"><small>06/04/2015 as 22:12 - Sobre Bernardo Joaquim</small></p>
                      <p>Roberto, eu olhei os resultados, estou um pouco preocupada também mas vamos aguardar mais 12h</p>
                    </div>
                    <div class="spacer"></div>
                  </li>
                  <!--/ Mensagem 02-->
                </ul>
              </div>
              <!--/ dia 01-->



            </div>
          </div>
          <!--/evolução-->

          <!--Balanço-->
          <div class="tab-pane fade" id="balanco">
            <div class="col-lg-4">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="15/06/2015">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Data de referência
                  </span>
                </label>
                <span class="icon">
                  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </span>
              </span>
            </div>
            <div class="col-lg-12">
              <p class="no-margin">Dias de Acompanhamento: 8</p>
              <hr>
            </div>
            <div class="col-lg-4">
              <span class="input input--nariko block input--filled">
                <input class="input__field input__field--nariko" type="text" id="" value="D8">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    TOT
              </span>
            </div>
            <div class="spacer"></div>
            <div class="col-lg-4">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="220">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Bal.  Hídrico
                  </span>
                </label>
                <span class="icon">
                  <p class="text-center">ml</p>
                </span>
              </span>
            </div>
            <div class="col-lg-4">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="980">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Diurese 24H
                </label>
                <span class="icon">
                  <p class="text-center">°C</p>
                </span>
              </span>
            </div>
            <div class="col-lg-4">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="38,5°">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Temperatura Máxima 24H
                </label>
                <span class="icon">
                  <p class="text-center">ml</p>
                </span>
              </span>
            </div>

            <!--Acessos-->
            <div class="col-lg-12">
              <h2>
                Acessos
                <a href="" class="btn btn-success btn-rounded">
                  <span class="glyphicon glyphicon-plus"></span>
                </a>
              </h2>
              <div class="spacer md"></div>
              <div class="row">
                <!--linha 1-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 1-->
                <!--linha 2-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 2-->
              </div>
            </div>
            <!--/ Acessos-->

            <!--Drenos-->
            <div class="col-lg-12">
              <h2>
                Drenos
                <a href="" class="btn btn-success btn-rounded">
                  <span class="glyphicon glyphicon-plus"></span>
                </a>
              </h2>
              <div class="spacer md"></div>
              <div class="row">
               <!--linha 1-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 1-->
                <!--linha 2-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 2-->
              </div>
            </div>
            <!--/ Drenos-->

            <!--Antibióticos-->
            <div class="col-lg-12">
              <h2>
                Antibióticos
                <a href="" class="btn btn-success btn-rounded">
                  <span class="glyphicon glyphicon-plus"></span>
                </a>
              </h2>
              <div class="spacer md"></div>
              <div class="row">
                <!--linha 1-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 1-->
                <!--linha 2-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 2-->
              </div>
            </div>
            <!--/ Antibióticos-->

             <!--Infusões-->
            <div class="col-lg-12">
              <h2>
                Infusões
                <a href="" class="btn btn-success btn-rounded">
                  <span class="glyphicon glyphicon-plus"></span>
                </a>
              </h2>
              <div class="spacer md"></div>
              <div class="row">
                <!--linha 1-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 1-->
                <!--linha 2-->
                <div>
                  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="tipo" value="D1">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="valor" value="VJIE">
                    </div>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    <button class="btn btn-danger btn-rounded">
                      <span class="glyphicon glyphicon-remove"></span>
                    </button>
                  </div>
                </div>
                <!--/ linha 2-->
              </div>
            </div>
            <!--/ Infusões-->

            <div class="spacer lg"></div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
              <button class="btn btn-success btn-block">Salvar</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
              <button class="btn btn-block">Cancelar</button>
            </div>
          </div>
          <!--/ Balanço-->

          <!-- exames-->
          <div class="tab-pane fade" id="exames">

            <!--lista-exames-->
            <div id="listaExames">
              <div class="col-lg-3">
                <select class="form-control">
                  <option>Últimos 10 exames</option>
                  <option>Últimos 9 exames</option>
                  <option>Últimos 8 exames</option>
                  <option>Últimos 7 exames</option>
                  <option>Últimos 6 exames</option>
                </select>
              </div>
              <div class="col-lg-offset-5 col-lg-4">
                <div class="pull-right">
                  <button class="btn btn-danger exames-control">Novo Exame</button>
                </div>
              </div>
              <div class="spacer md"></div>

              <div class="col-lg-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr class="info">
                        <td class="col-lg-3"><b>Hematologia</b></td>
                        <td class="col-lg-2 text-center">01/03/15</td>
                        <td class="col-lg-2 text-center">05/03/15</td>
                        <td class="col-lg-2 text-center">08/03/15</td>
                        <td class="col-lg-2 text-center">12/03/15</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-lg-3 text-info">Hemoglobina</td>
                        <td class="col-lg-2 text-center">11</td>
                        <td class="col-lg-2 text-center">13,2</td>
                        <td class="col-lg-2 text-center">12</td>
                        <td class="col-lg-2 text-center">11</td>
                      </tr>
                      <tr>
                        <td class="col-lg-3 text-info">Leocócitos Totais</td>
                        <td class="col-lg-2 text-center"></td>
                        <td class="col-lg-2 text-center">5,800</td>
                        <td class="col-lg-2 text-center"></td>
                        <td class="col-lg-2 text-center">5,800</td>
                      </tr>
                      <tr>
                        <td class="col-lg-3 text-info">Plaquetas</td>
                        <td class="col-lg-2 text-center">11</td>
                        <td class="col-lg-2 text-center">13,2</td>
                        <td class="col-lg-2 text-center">12</td>
                        <td class="col-lg-2 text-center">11</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="spacer md"></div>
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr class="info">
                        <td class="col-lg-3"><b>Bioquímica</b></td>
                        <td class="col-lg-2 text-center">01/03/15</td>
                        <td class="col-lg-2 text-center">05/03/15</td>
                        <td class="col-lg-2 text-center">08/03/15</td>
                        <td class="col-lg-2 text-center">12/03/15</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-lg-3 text-info">Glicose</td>
                        <td class="col-lg-2 text-center">11</td>
                        <td class="col-lg-2 text-center">13,2</td>
                        <td class="col-lg-2 text-center">12</td>
                        <td class="col-lg-2 text-center">11</td>
                      </tr>
                      <tr>
                        <td class="col-lg-3 text-info">Uréia</td>
                        <td class="col-lg-2 text-center"></td>
                        <td class="col-lg-2 text-center">5,800</td>
                        <td class="col-lg-2 text-center"></td>
                        <td class="col-lg-2 text-center">5,800</td>
                      </tr>
                      <tr>
                        <td class="col-lg-3 text-info">Creatinina</td>
                        <td class="col-lg-2 text-center">11</td>
                        <td class="col-lg-2 text-center">13,2</td>
                        <td class="col-lg-2 text-center">12</td>
                        <td class="col-lg-2 text-center">11</td>
                      </tr>
                      <tr>
                        <td class="col-lg-3 text-info">Sódio</td>
                        <td class="col-lg-2 text-center">11</td>
                        <td class="col-lg-2 text-center">13,2</td>
                        <td class="col-lg-2 text-center">12</td>
                        <td class="col-lg-2 text-center">11</td>
                      </tr>
                      <tr>
                        <td class="col-lg-3 text-info">Potássio</td>
                        <td class="col-lg-2 text-center">11</td>
                        <td class="col-lg-2 text-center">13,2</td>
                        <td class="col-lg-2 text-center">12</td>
                        <td class="col-lg-2 text-center">11</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/lista exames-->

            <!--novo exame-->
            <div id="novoExame" class="hidden">
              <div class="col-lg-3">
                <span class="input input--nariko block">
                  <input class="input__field input__field--nariko" type="text" id="" value="10/05/15">
                  <label class="input__label input__label--nariko">
                    <span class="input__label-content input__label-content--nariko" for="">
                      Data de Referência
                    </span>
                  </label>
                  <span class="icon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </span>
              </div>
              <div class="spacer"></div>
              <div class="col-lg-12">
                <hr>
                <!--exame 1-->
                <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title text-uppercase">
                        <a data-toggle="collapse" href="#exame-01">
                          Hematologia
                          <div class="chevron in">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </div>
                        </a>
                      </h4>
                    </div>
                    <div id="exame-01" class="panel-collapse collapse">
                      <div class="panel-body bleed">
                        <div class="row">
                          <div class="spacer sm"></div>
                          <!--linha 1-->
                          <div class="col-lg-2">
                            <label>TAP</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 1-->
                          <!--linha 2-->
                          <div class="col-lg-2">
                            <label>Bilirrubina Indireta</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 2-->
                          <!--linha 3-->
                          <div class="col-lg-2">
                            <label>PPT</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 3-->
                          <!--linha 4-->
                          <div class="col-lg-2">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="tipo">
                            </div>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                            <button class="btn btn-success btn-rounded">
                              <span class="glyphicon glyphicon-ok"></span>
                            </button>
                          </div>
                          <!--/ linha 4-->
                        </div>
                      </div>
                    </div>
                  </div>     
                </div>
                <!--/ exame 1-->
                <!--exame 2-->
                <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title text-uppercase">
                        <a data-toggle="collapse" href="#exame-02">
                          Coagulograma
                          <div class="chevron in">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </div>
                        </a>
                      </h4>
                    </div>
                    <div id="exame-02" class="panel-collapse collapse in">
                      <div class="panel-body bleed">
                        <div class="row">
                          <div class="spacer sm"></div>
                          <!--linha 1-->
                          <div class="col-lg-2">
                            <label>TAP</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 1-->
                          <!--linha 2-->
                          <div class="col-lg-2">
                            <label>Bilirrubina Indireta</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 2-->
                          <!--linha 3-->
                          <div class="col-lg-2">
                            <label>PPT</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 3-->
                          <!--linha 4-->
                          <div class="col-lg-2">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="tipo">
                            </div>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                            <button class="btn btn-success btn-rounded">
                              <span class="glyphicon glyphicon-ok"></span>
                            </button>
                          </div>
                          <!--/ linha 4-->
                        </div>
                      </div>
                    </div>
                  </div>     
                </div>
                <!--/ exame 2-->
                <!--exame 3-->
                <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title text-uppercase">
                        <a data-toggle="collapse" href="#exame-03">
                          Bioquímica
                          <div class="chevron in">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </div>
                        </a>
                      </h4>
                    </div>
                    <div id="exame-03" class="panel-collapse collapse">
                      <div class="panel-body bleed">
                        <div class="row">
                          <div class="spacer sm"></div>
                          <!--linha 1-->
                          <div class="col-lg-2">
                            <label>TAP</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 1-->
                          <!--linha 2-->
                          <div class="col-lg-2">
                            <label>Bilirrubina Indireta</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 2-->
                          <!--linha 3-->
                          <div class="col-lg-2">
                            <label>PPT</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 3-->
                          <!--linha 4-->
                          <div class="col-lg-2">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="tipo">
                            </div>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                            <button class="btn btn-success btn-rounded">
                              <span class="glyphicon glyphicon-ok"></span>
                            </button>
                          </div>
                          <!--/ linha 4-->
                        </div>
                      </div>
                    </div>
                  </div>     
                </div>
                <!--/ exame 3-->
                <!--exame 4-->
                <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title text-uppercase">
                        <a data-toggle="collapse" href="#exame-04">
                          Outros
                          <div class="chevron in">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </div>
                        </a>
                      </h4>
                    </div>
                    <div id="exame-04" class="panel-collapse collapse">
                      <div class="panel-body bleed">
                        <div class="row">
                          <div class="spacer sm"></div>
                          <!--linha 1-->
                          <div class="col-lg-2">
                            <label>TAP</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 1-->
                          <!--linha 2-->
                          <div class="col-lg-2">
                            <label>Bilirrubina Indireta</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 2-->
                          <!--linha 3-->
                          <div class="col-lg-2">
                            <label>PPT</label>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                          </div>
                          <!--/ linha 3-->
                          <!--linha 4-->
                          <div class="col-lg-2">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="tipo">
                            </div>
                          </div>
                          <div class="col-lg-9">
                            <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="valor">
                            </div>
                          </div>
                          <div class="col-lg-1">
                            <button class="btn btn-success btn-rounded">
                              <span class="glyphicon glyphicon-ok"></span>
                            </button>
                          </div>
                          <!--/ linha 4-->
                        </div>
                      </div>
                    </div>
                  </div>     
                </div>
                <!--/ exame 4-->
              </div>
              <div class="spacer xl"></div>
              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
                <button class="btn btn-success btn-block exames-control">Salvar</button>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
                <button class="btn btn-block">Cancelar</button>
              </div>
            </div>
            <!--/novo exame-->
          </div>
          <!--/exames-->

          <!--Tarefas-->
          <div class="tab-pane fade" id="tarefas">
            <div class="col-lg-10">
              <h4 class="no-margin">Nova Tarefa</h4>
            </div>
            <div class="spacer sm"></div>
            <div class="col-md-8 col-lg-8">
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="Medir Pressão d...">
              </div>
            </div>
            <div class="col-md-4 col-lg-2">
              <button class="btn btn-danger btn-block">Novo Exame</button>
            </div>
            <div class="spacer"></div>
            <div class="col-lg-12"><hr></div>

            <div class="col-lg-12">
              <h4 class="no-margin">Lista de tarefas</h4>
              <div class="spacer sm"></div>
              
              <!--tarefa 01-->
              <div class="highlight">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="checkbox">
                      <input type="checkbox" id="tarefa1" checked>
                      <label for="tarefa1">Medir Pressão</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="spacer sm"></div>
                    <p class="text-right text-muted">
                      <small>Criada por: Paulo Niemeyer em 22/04/2015 as 16:26</small>
                    </p>
                  </div>
                </div>
              </div>
              <!--/ tarefa 01-->

              <!--tarefa 02-->
              <div class="highlight">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="checkbox">
                      <input type="checkbox" id="tarefa1">
                      <label for="tarefa1">Colher exames</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="spacer sm"></div>
                    <p class="text-right text-muted">
                      <small>Criada por: Paulo Niemeyer em 22/04/2015 as 16:26</small>
                    </p>
                  </div>
                </div>
              </div>
              <!--/ tarefa 02-->

              <!--tarefa 03-->
              <div class="highlight">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="checkbox">
                      <input type="checkbox" id="tarefa1">
                      <label for="tarefa1">Medir temperatura</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="spacer sm"></div>
                    <p class="text-right text-muted">
                      <small>Criada por: Paulo Niemeyer em 22/04/2015 as 16:26</small>
                    </p>
                  </div>
                </div>
              </div>
              <!--/ tarefa 03-->
            </div>
          </div>
          <!--/ Tarefas-->

          <!--Detalhes-->
          <div class="tab-pane fade" id="detalhes">            
            
            <!-- Nome-->
            <div class="col-lg-10">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="Camila Carvalho Ferreira da Silva">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Nome
                  </span>
                </label>
              </span>
            </div>
            <div class="spacer"></div>
            <!--/ Nome-->

            <!-- Localização-->
            <div class="col-lg-4">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="Leito 01">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Localização
                  </span>
                </label>
              </span>
            </div>
            <!--/Localização-->

            <!-- Registro-->
            <div class="col-lg-3">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="ABC 48257">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Registro
                  </span>
                </label>
              </span>
            </div>
            <!--/ Registro-->

            <!-- Desde-->
            <div class="col-lg-3">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="date" id="" value="15/06/2015">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Desde
                  </span>
                </label>
                <span class="icon">
                  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </span>
              </span>
            </div>
            <!-- / Desde-->

            <!--Diagnóstico-->
            <div class="col-lg-7">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="Pneumonia Comum">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Diagnóstico
                  </span>
                </label>
              </span>
            </div>
            <!--/ Diagnóstico-->

            <!--Alergias-->
            <div class="col-lg-3">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="text" id="" value="Penincilina">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Alergias
                  </span>
                </label>
              </span>
            </div>
            <!--/ Alergias-->

            <!-- Data de Nascimento-->
            <div class="col-lg-4">
              <span class="input input--nariko block">
                <input class="input__field input__field--nariko" type="date" id="" value="14/08/1981">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="">
                    Data de Nascimento
                  </span>
                </label>
                <span class="icon">
                  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </span>
              </span>
            </div>
            <!-- / Data de Nascimento-->

            <div class="col-lg-6">
              <div class="spacer sm"></div>
              <div class="radio pull-left">
                <input type="radio" id="radio01" name="radio" />
                <label for="radio01"><span></span>Masculino</label>
              </div>
              <div class="radio pull-left">
               <input type="radio" id="radio02" name="radio" />
               <label for="radio02"><span></span>Feminino</label>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="spacer md"></div>
              <h2>
                Contatos 
                <a href="" class="btn btn-success btn-rounded">
                  <span class="glyphicon glyphicon-plus"></span>
                </a>
              </h2>
              <div class="spacer md"></div>
            </div>

            <!--Contato 01-->
            <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5">
               <div class="highlight">
                <div class="row">
                  <div class="col-lg-12"><p>Ana Carolina</p></div>
                  <div class="spacer"></div>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
               <div class="highlight">
                <div class="row">
                  <div class="col-lg-12"><p>(21)98300 1010</p></div>
                  <div class="spacer"></div>
                </div>
              </div>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
              <button class="btn btn-danger btn-rounded text-center">
                <span class="glyphicon glyphicon-remove"></span>
              </button>
            </div>
            <div class="spacer lg hidden-lg hidden-md"></div>
            <!--/ Contato 01-->

            <!--Contato 02-->
            <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5">
               <div class="highlight">
                <div class="row">
                  <div class="col-lg-12"><p>Bruno Roedel</p></div>
                  <div class="spacer"></div>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
               <div class="highlight">
                <div class="row">
                  <div class="col-lg-12"><p>(21)98225 6828</p></div>
                  <div class="spacer"></div>
                </div>
              </div>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
              <button class="btn btn-danger btn-rounded text-center">
                <span class="glyphicon glyphicon-remove"></span>
              </button>
            </div>
            <div class="spacer lg hidden-lg hidden-md"></div>
            <!--/ Contato 02-->

            <!--Integrante 03-->
            <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5">
               <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
              </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Telefone">
              </div>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
              <button class="btn btn-success btn-rounded">
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </div>
            <div class="spacer lg hidden-lg hidden-md"></div>
            <!--/ Integrante 03-->
           
            <!--Profissionais-->
            <div class="col-lg-12">
              <div class="spacer md"></div>
              <h2>
                Profissionais 
                <a href="" class="btn btn-success btn-rounded">
                  <span class="glyphicon glyphicon-plus"></span>
                </a>
              </h2>
              <div class="spacer md"></div>
            </div>

            <!--Integrante 01-->
            <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5">
               <div class="highlight">
                <div class="row">
                  <div class="col-lg-12"><p>Bruno Roedel</p></div>
                  <div class="spacer"></div>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
               <div class="highlight">
                <div class="row">
                  <div class="col-lg-12"><p>(21)98225 6828</p></div>
                  <div class="spacer"></div>
                </div>
              </div>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
              <button class="btn btn-danger btn-rounded text-center">
                <span class="glyphicon glyphicon-remove"></span>
              </button>
            </div>
            <div class="spacer lg hidden-lg hidden-md"></div>
            <!--/ Integrante 01-->

            <!--Integrante 02-->
            <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5">
               <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
              </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Telefone">
              </div>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
              <button class="btn btn-success btn-rounded">
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </div>
            <div class="spacer lg hidden-lg hidden-md"></div>
            <!--/ Integrante 02-->

            <!--/ Profissionais-->
            <div class="spacer lg"></div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
              <button class="btn btn-success btn-block">Salvar</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
              <button class="btn btn-block">Cancelar</button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
              <div class="spacer md hidden-md hidden-lg"></div>
              <button class="btn btn-no-background gray btn-block">Desastivar Paciente</button>
            </div>  
          </div>
          <!--/ Detalhes-->

          <div class="spacer lg"></div>
        </div>       
      </div>
      <!--/novo exame-->   
    </div><!--/ pageContent-->

    <?php require '../shared/javascript.php'; ?>
  </body>
</html>