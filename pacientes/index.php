<?php
  $sectionTitle = array("Pacientes" => " ");
  $breadCrumb = array("Inicio", "Pacientes");
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
				<!-- Nav tabs -->
				<div class="table-responsive">
				  <ul class="nav nav-tabs">
				    <li class="active">
				      <a href="#pacientes" data-toggle="tab">PACIENTES</a>
				    </li>
				    <li>
				      <a href="#mensagens" data-toggle="tab">MENSAGENS</a>
				    </li>
				    <li>
				      <a href="#detalhes" data-toggle="tab">DETALHES</a>
				    </li>
				  </ul>
				</div>
				<!-- Nav tabs -->

				<div class="tab-content">
      				<!--Tab pacientes-->
      				<div class="tab-pane active" id="pacientes">
      					<div class="col-lg-6">
							<input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle" checked/>
							<label for="checkbox1" class="checkbox-label pull-left" data-off="" data-on=""></label>
							<h5 class="pull-left">mostrar apenas ativos</h5>
						</div>
						<div class="col-lg-6">
						  <div class="pull-right">
						    <a href="cadastrar-paciente.php" class="btn btn-danger">Novo Paciente</a>
						  </div>
						  <div class="spacer lg"></div>
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
					                    <span class="icon icon-local"></span> LOCALIZAÇÃO
					                  </th>
					                  <th class="col-lg-2 text-center">
					                     <span class="icon icon-hora"></span> ACOMPANHAMENTO
					                  </th>
					                </tr>
					              </thead>
					              <tbody>
					                <tr>
					                  <td >
					                    <a href="paciente.php">Bernardo Joaquim</a>
					                  </td>
					                  <td class="text-center">
					                    <a href="" class="numberBox">8</a>
					                  </td>
					                  <td class="text-center">
					                  	CTI Clinico - Leito 12
					                  </td>
					                  <td class="text-center">
					                    6 Dias
					                  </td>
					                </tr>
					                <tr>
					                  <td >
					                    <a href="">Ana Carolina</a>
					                  </td>
					                  <td class="text-center">
					                    <a href="" class="numberBox">8</a>
					                  </td>
					                  <td class="text-center">
					                  	CTI Clinico - Leito 12
					                  </td>
					                  <td class="text-center">
					                    6 Dias
					                  </td>
					                </tr>
					                <tr>
					                  <td >
					                    <a href="">João de Deus</a>
					                  </td>
					                  <td class="text-center">
					                    <a href="" class="numberBox">8</a>
					                  </td>
					                  <td class="text-center">
					                  	CTI Clinico - Leito 12
					                  </td>
					                  <td class="text-center">
					                    6 Dias
					                  </td>
					                </tr>
					                <tr>
					                  <td >
					                    <a href="">maria Cristina</a>
					                  </td>
					                  <td class="text-center">
					                    <a href="" class="numberBox">8</a>
					                  </td>
					                  <td class="text-center">
					                  	CTI Clinico - Leito 12
					                  </td>
					                  <td class="text-center">
					                    6 Dias
					                  </td>
					                </tr>
					                
					              </tbody>
					            </table>
					        </div>
				        </div>
      				</div>
      				<!--/ Tab pacientes-->

      				<!--Tab mensagens-->
      				<div class="tab-pane" id="mensagens">
      					<div class="col-lg-12">
      						<div class="textarea-rich">
	      						<div class="menu">
	      							<a href="#"><span class="glyphicon glyphicon-bold" ></span></a>
	      							<a href="#"><span class="glyphicon glyphicon-italic"></span></a>
	      							<a href="#"><span class="glyphicon glyphicon-link"></span></a>
	      						</div>
	      						<textarea class="form-control" rows="5" placeholder="Digite aqui a sua mensagem" ></textarea>
      						</div>
      					</div>
      					<div class="spacer md"></div>
      					<div class="col-md-4 col-lg-4">
      						<select class="form-control">
							  <option>Associe essa mensagem a um paciente</option>
							  <option>paciente 1</option>
							  <option>paciete 2</option>
							  <option>pacente 3</option>
							  <option>paciente 4</option>
							</select>
							<div class="spacer md hidden-md hidden-lg"></div>
      					</div>
      					<div class="col-lg-offset-4 col-md-offset-2 col-md-3 col-lg-2">
      						<button class="btn btn-block btn-danger">
      							<span class="glyphicon glyphicon-paperclip"></span>
      							Anexar Arquivo
      						</button>
      						<div class="spacer md hidden-md hidden-lg"></div>
      					</div>
      					<div class="col-md-3 col-lg-2">
      						<button class="btn btn-block btn-success">Enviar Mensagem</button>
      					</div>
      					<div class="spacer md"></div>

      					<div class="col-lg-12">
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
      				</div>
      				<!--/ Tab mensagens-->

      				<div class="tab-pane" id="detalhes">
      					<!--novo round-->
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
						

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
						  <button class="btn btn-success btn-block">Salvar</button>
						  <div class="spacer md"></div>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
						  <button class="btn btn-no-background gray btn-block">Cancelar</button>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
						  <button class="btn btn-no-background gray btn-block">Desativar Round</button>
						</div>
						<!--novo round-->
      				</div>
      			</div>
      		</div>
    	</div><!--/ pageContent-->
    	<?php require '../shared/javascript.php'; ?>
    </body>
</html>