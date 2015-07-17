<?php
  $sectionTitle = array("Novo Paciente" => "");
  $breadCrumb = array("Inicio", "Pacientes", "Novo Paciente");
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

    <?php require '../shared/javascript.php'; ?>
  </body>
</html>