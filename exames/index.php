<?php
  $sectionTitle = "Exames";
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
	    	<!--pacientes-->
			<div class="row">
				<div class="col-lg-12">
				  <div class="pull-right">
				    <a href="cadastrar-exame.php" class="btn btn-danger">Novo Exame</a>
				  </div>
				  <div class="spacer md"></div>
				</div>
			


			</div>
    	</div><!--/ pageContent-->
    	<?php require '../shared/javascript.php'; ?>
  </body>
</html>