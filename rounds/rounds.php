<?php
  $sectionTitle = "Rounds";
  $breadCrumb = array("Inicio", $sectionTitle);
  $roundDetails = array("Pacientes" => 5, "Profissionais" => 5, "Tarefas" => 5);
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

      <!--rounds-->
      <div class="row">
        <div class="col-lg-12">
          <div class="pull-right">
            <a href="cadastrar-round.php" class="btn btn-danger">Novo Round</a>
          </div>
          <div class="spacer md"></div>
        </div>

        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-responsive table-hover">
              <thead>
                <tr>
                  <th class="col-lg-3">NOME</th>
                  <th class="col-lg-2 text-center">
                    <span class="icon icon-checked"></span> TAREFAS
                  </th>
                  <th class="col-lg-2 text-center">
                    <span class="icon icon-pacientes"></span>PACIENTES
                  </th>
                  <th class="col-lg-2 text-center">
                     <span class="icon icon-doctor"></span>PROFISSIONAIS
                  </th>
                  <th class="col-lg-3 text-right">
                    <span class="icon icon-hora"></span>ÚLTIMAS ATIVIDADES
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td >
                    <a href="">Copa D'or</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">3</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">8</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">4</a>
                  </td>
                  <td class="text-right">
                    <a href="">Hoje às 12:00</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Albert Einstein</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">12</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">9</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">3</a>
                  </td>
                  <td class="text-right">
                    <a href="">Hoje às 15:20</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Samaritano</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">3</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">8</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">4</a>
                  </td>
                  <td class="text-right">
                    <a href="">Ontem às 12:03</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Pasteur</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">3</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">8</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">4</a>
                  </td>
                  <td class="text-right">
                    <a href="">Ontem às 10:03</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">São Vicente de Paula</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">3</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">8</a>
                  </td>
                  <td class="text-center">
                    <a href="" class="numberBox">4</a>
                  </td>
                  <td class="text-right">
                    <a href="">21/04/2015</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--rounds-->      
    </div><!--/ pageContent-->

    <?php require '../shared/javascript.php'; ?>
  </body>
</html>