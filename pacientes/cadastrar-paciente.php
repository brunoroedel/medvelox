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

    <!--navibar Top-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerMenu">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="img/logo-medvelox.png" alt="Medvelox"/>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="headerMenu">
          <ul class="nav navbar-nav navbar-right">
            <li class="searchBox">
              <span class="input input--nariko">
                <input class="input__field input__field--nariko" type="text" id="input-20">
                <label class="input__label input__label--nariko">
                  <span class="input__label-content input__label-content--nariko" for="input-20">
                    <span class="glyphicon glyphicon-search"></span> Clique e digite para buscar
                  </span>
                </label>
              </span>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="img/dr-paulo-niemayer.jpg" class="thumbnail-user img-circle" alt="Dr. Paulo Niemayer"/>
                Dr. Paulo Niemayer <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
              </ul>
            </li>
            <li>
              <a href="#" id="openAlerts">
                <span class="icon icon-right-menu"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/navibar Top-->

    <!--Vertical Menu Left-->
    <nav id="vertical-menu-left">
      <div id="openMenu">
        <span class="icon icon-menu"></span>
      </div>

      <!--just for mobile screens-->
      <div id="CloseMenuSmall">
        <div class="icon">
          <span class="glyphicon glyphicon-remove"></span>
        </div>
        <div class="label">Fechar Menu</div>
      </div>
      <!--/ just for mobile screens-->

      <ul>
        <li>
          <a href="#" >
            <div class="iconMenu">
              <span class="icon icon-painel"></span>
            </div>
            <div class="label">Painel</div>
          </a>
        </li>           
        <li class="active">
          <a href="#submenu-rounds" data-toggle="collapse">
            <div class="iconMenu">
              <span class="icon icon-rounds"></span>
            </div>
            <div class="label">Rounds <span class="badge">5</span></div>
            <div class="chevron">
              <span class="glyphicon glyphicon-chevron-down"></span>
              <span class="glyphicon glyphicon-chevron-left"></span>
            </div>
          </a>
          <div class="panel-collapse collapse in" id="submenu-rounds">
            <ul class="sublevel">
              <li>
                <a href="">
                  <div class="iconMenu">CD</div>
                  <div class="label">Copa D'Or</div>
                </a>
              </li>             
              <li>
                <a href="">
                  <div class="iconMenu">Sa</div>
                  <div class="label">Samaritano <span class="badge">5</span></div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="iconMenu">AA</div>
                  <div class="label">Albert Einstein</div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="iconMenu">Pa</div>
                  <div class="label">Pasteur <span class="badge">2</span></div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="iconMenu">SV</div>
                  <div class="label">São Vicente de Paula</div>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#submenu-hospitais" data-toggle="collapse" class="collapsed">
            <div class="iconMenu">
              <span class="icon icon-hospitais"></span>
            </div>
            <div class="label">Hospitais <span class="badge">2</span></div>
            <div class="chevron">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="glyphicon glyphicon-chevron-down"></span>
            </div>
          </a>
          <div class="panel-collapse collapse" id="submenu-hospitais">
            <ul class="sublevel">
              <li>
                <a href="">
                  <div class="iconMenu">CD</div>
                  <div class="label">Copa D'Or</div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="iconMenu">Sa</div>
                  <div class="label">Samaritano </div>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!--/ Vertical Menu Left-->

    <!--open vertical menu left small screens-->
    <div id="bottomMenu">
      <button id="OpenMenuSmall">
        <span class="icon icon-menu"></span>
      </button>

      <button id="OpenSmallAlerts">
        <span class="icon icon-right-menu"></span>
      </button>
    </div>
    <!--/open vertical menu left small screens-->
    
    <!--Alert Box-->
    <div id="alertBox">
      <div class="title">
        <h5>Tarefas</h5>
      </div>

      <!--just for mobile screens-->
      <div id="CloseSmallAlerts">
        <div class="icon">
          <span class="glyphicon glyphicon-remove"></span>
        </div>
        <div class="label">Fechar Tarefas</div>
      </div>
      <!--/ just for mobile screens-->

      <!--Task 01-->
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#task-01">
                COPA D'Or <span class="badge">2</span>
                <div class="chevron in">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </div>
              </a>
            </h4>
          </div>
          <div id="task-01" class="panel-collapse collapse in" >
            <div class="panel-body">
              <h5>Bernardo Joaquim</h5>
              <h6>CTI Cardiaco - Leito 5</h6>
            </div>
            <div class="panel-body">
              <h5>Bruno Roedel</h5>
              <h6>CTI Cardiaco - Leit0 1</h6>
              <div class="checkbox">
                <input type="checkbox" id="check1">
                <label for="check1">Colher exames</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" id="check2">
                <label for="check2">Medir temperatura</label>
              </div>
            </div>
          </div>
        </div>     
      </div>
      <!--/ Task 01-->

      <!--Task 02-->
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#task-02">
                São Vicente de Paula <span class="badge">2</span>
                <div class="chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </div>
              </a>
            </h4>
          </div>
          <div id="task-02" class="panel-collapse collapse">
            <div class="panel-body">
              <h5>Bernardo Joaquim</h5>
              <h6>CTI Cardiaco - Leito 5</h6>
            </div>
            <div class="panel-body">
              <h5>Bruno Roedel</h5>
              <h6>CTI Cardiaco - Leit0 1</h6>
              <div class="checkbox">
                <input type="checkbox" id="check3">
                <label for="check3">Colher exames</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" id="check4">
                <label for="check4">Medir temperatura</label>
              </div>
            </div>
          </div>
        </div>     
      </div>
      <!--/ Task 02-->
    </div>
    <!--/Alert Box-->

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
                <a href="#">Samaritano</a>
              </li>
              <li class="active">
                <span class="glyphicon glyphicon-chevron-right"></span>Novo Paciente
              </li>
            </ol>
          </div>
          <!--/ breadcrumb-->  

          <div class="col-lg-6">
            <h1 class="">Novo Paciente</h1>
          </div>
        </div>
      </div>
      <!--/ top page-->

      <!--novo paciente-->
      <div class="row">
        <form>
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

          <div class="col-lg-3">
            <span class="input input--nariko block">
              <input class="input__field input__field--nariko" type="text" id="" value="Pneumonia Comum">
              <label class="input__label input__label--nariko">
                <span class="input__label-content input__label-content--nariko" for="">
                  Diagnóstico
                </span>
              </label>
            </span>
          </div>

          <div class="col-lg-7">
            <span class="input input--nariko block">
              <input class="input__field input__field--nariko" type="text" id="" value="">
              <label class="input__label input__label--nariko">
                <span class="input__label-content input__label-content--nariko" for="">
                  Alergias
                </span>
              </label>
            </span>
          </div>

          <div class="col-lg-3">
            <span class="input input--nariko block">
              <input class="input__field input__field--nariko" type="date" id="" value="">
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
        </form>
  
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

      </div>
      <!--novo paciente-->   
    </div><!--/ pageContent-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="javascripts/bootstrap.min.js"></script>-->
    <script src="javascripts/bootstrap.js"></script>
    <script src="javascripts/classes.js"></script>
    <script src="javascripts/custom-input.js"></script>
    <script src="javascripts/nav-components.js"></script>

  </body>
</html>