<?php
  $sectionTitle = array("Buscar no Medvelox"  => "");
  $breadCrumb = array("Inicio", "Busca");
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
      <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-9">
          <div class="form-group">
            <input type="text" class="form-control input-lg" id="" placeholder="" value="Moraes">
          </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
          <button class="btn btn-danger btn-lg">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
        <div class="spacer md"></div>
        <div class="col-lg-12">
          <p class="text-muted">
            <span class="glyphicon glyphicon-search"></span> 12 resultados econtrados para <i>Moraes</i>
          </p>
          <div class="spacer md"></div>

          <div class="table-responsive">
            <ul class="nav nav-tabs blocked no-margin">
              <li class="active">
                <a href="#buscarMedicos" data-toggle="tab">Médicos <small>(3)</small></a>
              </li>
              <li class="">
                <a href="#buscarPacientes" data-toggle="tab">Pacientes <small>(5)</small></a>
              </li>
              <li class="">
                <a href="#buscarHospitais" data-toggle="tab">Hospitais <small>(4)</small></a>
              </li>
            </ul>
          </div>

          <div class="tab-content">
            <!--buscar-->
            <div class="tab-pane fade active in" id="buscarMedicos">
              <div class="spacer md"></div>
              <ul class="messages">
                <!--Medico 01-->
                <li>
                  <div class="user-image">
                    <img src="http://localhost/medvelox/assets/img/dr-paulo-niemayer.jpg" class="thumbnail-user img-circle">
                  </div>
                  <div class="message-info">
                    <h4 class="no-margin">Dra. Cláudia Miranda</h4>
                    <p class="no-margin"><small><b>Área:</b> <span class="text-muted">Neurologia, Cirirgia</span></small></p>
                    <p class="no-margin"><small><b>Celular:</b> <span class="text-muted">21 99447-9895</span></small></p>
                  </div>
                  <div class="spacer"></div>
                </li>
                <!--/ Medico 01-->
                <!--Medico 02-->
                <li>
                  <div class="user-image">
                    <img src="http://localhost/medvelox/assets/img/dr-paulo-niemayer.jpg" class="thumbnail-user img-circle">
                  </div>
                  <div class="message-info">
                    <h4 class="no-margin">Dra. Cláudia Miranda</h4>
                    <p class="no-margin"><small><b>Área:</b> <span class="text-muted">Neurologia, Cirirgia</span></small></p>
                    <p class="no-margin"><small><b>Celular:</b> <span class="text-muted">21 99447-9895</span></small></p>
                  </div>
                  <div class="spacer"></div>
                </li>
                <!--/ Medico 02-->
                <!--Medico 03-->
                <li>
                  <div class="user-image">
                    <img src="http://localhost/medvelox/assets/img/dr-paulo-niemayer.jpg" class="thumbnail-user img-circle">
                  </div>
                  <div class="message-info">
                    <h4 class="no-margin">Dra. Cláudia Miranda</h4>
                    <p class="no-margin"><small><b>Área:</b> <span class="text-muted">Neurologia, Cirirgia</span></small></p>
                    <p class="no-margin"><small><b>Celular:</b> <span class="text-muted">21 99447-9895</span></small></p>
                  </div>
                  <div class="spacer"></div>
                </li>
                <!--/ Medico 03-->
              </ul>
            </div>
            <div class="tab-pane fade" id="buscarPacientes">2</div>
            <div class="tab-pane fade" id="buscarHospitais">3</div>
          </div>

        </div>
      </div>
    </div><!--/ pageContent-->

    <?php require '../shared/javascript.php'; ?>
  </body>
</html>