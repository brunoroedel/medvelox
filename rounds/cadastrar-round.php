<?php
  $sectionTitle = "Novo Round";
  $breadCrumb = array("Inicio", "Rounds", $sectionTitle);
  $roundDetails = "";
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

      <!--novo round-->
      <div class="row">
        <div class="col-lg-10">
          <form>
            <span class="input input--nariko block">
              <input class="input__field input__field--nariko" type="text" id="input-02" value="Médico CTI Samaritano">
              <label class="input__label input__label--nariko">
                <span class="input__label-content input__label-content--nariko" for="input-02">
                  Nome do Round
                </span>
              </label>
            </span>
          </form>
        </div>
        
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
        <div class="col-xs-8 col-sm-9 col-md-8 col-lg-9">
           <div class="highlight">
            <div class="row">
              <div class="col-xs-8 col-sm-8 col-ms-8 col-lg-8"><p>Ana Carolina</p></div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><p class="text-right text-muted">Ativo</p></div>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-4 col-lg-3">
          <button class="btn btn-info btn-rounded">
            <span class="icon icon-info"></span>
          </button>
          <button class="btn btn-danger btn-rounded">
            <span class="glyphicon glyphicon-remove"></span>
          </button>
        </div>
        <!--/ Integrante 01-->

        <!--Integrante 02-->
        <div class="col-xs-8 col-sm-9 col-md-8 col-lg-9">
           <div class="highlight">
            <div class="row">
              <div class="col-xs-8 col-sm-8 col-ms-8 col-lg-8"><p>Ana Carolina</p></div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><p class="text-right text-muted">Ativo</p></div>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-4 col-lg-3">
          <button class="btn btn-info btn-rounded">
            <span class="icon icon-info"></span>
          </button>
          <button class="btn btn-danger btn-rounded">
            <span class="glyphicon glyphicon-remove"></span>
          </button>
        </div>
        <!--/ Integrante 02-->

        <!--Integrante 03-->
        <div class="col-xs-8 col-sm-9 col-md-8 col-lg-9">
           <div class="highlight">
            <div class="row">
              <div class="col-xs-8 col-sm-8 col-ms-8 col-lg-8"><p>Ana Carolina</p></div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><p class="text-right text-muted">Ativo</p></div>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-4 col-lg-3">
          <button class="btn btn-info btn-rounded">
            <span class="icon icon-info"></span>
          </button>
          <button class="btn btn-danger btn-rounded">
            <span class="glyphicon glyphicon-remove"></span>
          </button>
        </div>
        <!--/ Integrante 03-->

        <!--Integrante 03-->
        <div class="col-xs-8 col-sm-9 col-md-8 col-lg-9">
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
          </div>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-4 col-lg-3">         
           <button class="btn btn-success btn-rounded">
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </div>
        <!--/ Integrante 03-->

        <div class="spacer lg"></div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
          <button class="btn btn-success btn-block">Salvar</button>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
          <button class="btn btn-block">Cancelar</button>
        </div>
      </div>
      <!--novo round-->    
    </div><!--/ pageContent-->

    <?php require '../shared/javascript.php'; ?>
  </body>
</html>