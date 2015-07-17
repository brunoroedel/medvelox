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
            <li>
              <a href="#evolucao" data-toggle="tab">EVOLUÇÃO CLÍNICA</a>
            </li>
            <li>
              <a href="#balanco" data-toggle="tab">BALANÇO</a>
            </li>
            <li class="active">
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
          <div class="tab-pane" id="evolucao">...</div>

          <div class="tab-pane" id="balanco">...</div>

          <div class="tab-pane active" id="exames">
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
              <button class="btn btn-success btn-block">Salvar</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
              <button class="btn btn-block">Cancelar</button>
            </div>


          </div>
          <!--/exames-->

          <div class="tab-pane" id="detalhes">...</div>
        </div>       
      </div>
      <!--/novo exame-->   
    </div><!--/ pageContent-->

    <?php require '../shared/javascript.php'; ?>
  </body>
</html>