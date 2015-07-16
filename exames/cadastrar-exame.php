
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MedVelox</title>

    <!-- Bootstrap -->
    <link href="stylesheets/styles.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="menu-open">
    <?php require 'shared/navibar-top.php'; ?>
    <?php require 'shared/menu-left.php'; ?>
    <?php require 'shared/task-box.php'; ?>

    <div class="container-fluid" id="pageContent">      
      <!--top page-->
      <div class="top-page">
        <div class="row">         
          <!--breadcrumb-->
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li>
                <a href="#">Início</a>
              </li>
              <li>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a href="#">Rounds</a>
              </li>
              <li class="active">
                <span class="glyphicon glyphicon-chevron-right"></span>
                Samaritano
              </li>
            </ol>
          </div>
          <!--/ breadcrumb-->  

          <div class="col-lg-6">
            <h1 class="">Bernardo Joaquim <small>23 anos</small></h1>
          </div>
          <div class="col-lg-6">
            <ul class="list-inline round-details">
              <li>
                PACIENTES <strong>5</strong>
              </li>
              <li>
                PROFISSIONAIS <strong>5</strong>
              </li>
              <li>
                TAREFAS <strong>5</strong>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ top page-->

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

              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#exame-01">
                        Hematologia
                        <div class="chevron in">
                          <span class="glyphicon glyphicon-chevron-down"></span>
                          <span class="glyphicon glyphicon-chevron-left"></span>
                        </div>
                      </a>
                    </h4>
                  </div>
                  <div id="exame-01" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <h5>Bernardo Joaquim</h5>
                      <h6>CTI Cardiaco - Leito 5</h6>
                    </div>
                  </div>
                </div>     
              </div>
            </div>
          </div>
          <!--/exames-->

          <div class="tab-pane" id="detalhes">...</div>
        </div>       
      </div>
      <!--/novo exame-->   
    </div><!--/ pageContent-->

    <?php require 'shared/javascript.php'; ?>
  </body>
</html>