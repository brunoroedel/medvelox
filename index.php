<!DOCTYPE html>
<html lang="en">
  <?php require 'shared/head.php'; ?>
  
  <body>
  	<?php require 'shared/navibar-top-logout.php'; ?>
	<section class="bg-white" id="start-landing" >
	    <div class="container"> 
	    	<div class="col-lg-8 col-md-8">
		    	<div class="carousel slide" id="slider-index">
		    		<!--<ol class="carousel-indicators">
					   <li data-target="#slider-index" data-slide-to="0" class="active"></li>
					   <li data-target="#slider-index" data-slide-to="1"></li>
					   <li data-target="#slider-index" data-slide-to="2"></li>
					</ol>-->
		    		<div class="carousel-inner">
					    <div class="item active">
					        <h1>Uma nova maneira de compartilhar informações, ideias e oportunidades entre profissionais e instituições de saúde.</h1>
					        <ul class="messages">
					        	<li>
				                    <div class="user-image">
				                      <img src="http://localhost/medvelox/assets/img/dr-paulo-niemayer.jpg" class="thumbnail-user img-circle">
				                    </div>
				                    <div class="message-info ">
				                      <p class="lead no-margin"><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut."</em></p>
				                      <p>Dra. Cláudia Miranda</p>
				                    </div>
				                    <div class="spacer"></div>
			                  	</li>
					        </ul>
					    </div>
					    <!--<div class="item">
					      <h2>teste 2</h2>
					    </div>
					    <div class="item">
					      <h2>teste 3</h2>
					    </div>-->
					</div>
		    	</div>
	    	</div>
	    	<div class="col-lg-4 col-md-4">
	    		<div class="img-banner">
	    			<img src="assets/img/banner-landing-01.png" class="img-responsive"/>
	    		</div>
	    	</div>
	    </div>
	</section>

	<section class="bg-white" id="devices" >
		<div class="container">
			<div class="col-md-4 col-lg-4 text-center">
				<img src="assets/img/android-app.png" class="img-responsive center-block"/>
				<div class="spacer md"></div>
				<a href="" class="btn btn-no-background pink">
					<span class="icon icon-android"></span>&nbsp;App <b>Android</b>
				</a>
			</div>
			<div class="col-md-4 col-lg-4 text-center">
				<img src="assets/img/desktop-app.png" class="img-responsive center-block"/>
				<div class="spacer md"></div>
				<p class="text-pink">
					<span class="lead">&#60;&#47;&#62;&nbsp;</span>Versão <b>Web</b>
				</p>
			</div>
			<div class="col-md-4 col-lg-4 text-center">
				<img src="assets/img/ios-app.png" class="img-responsive center-block"/>
				<div class="spacer md"></div>
				<a href="" class="btn btn-no-background pink"><span class="icon icon-apple"></span> App <b>IOS</b></a>
			</div>
		</div>
	</section>
	<section id="vantagens">
		<div class="container">
			<div class="col-lg-12">
				<h2 class="text-center">Facilite a troca de informações sobre pacientes, entre<br/> profissionais de saúde e hospitais</h2>
				<div class="spacer lg"></div>
			</div>
			<div class="col-md-4 col-lg-4 text-center">
				<img src="assets/img/melhore-comunicacao.png" class="img-responsive center-block"/>
				<h5 class="text-dark-gray">MELHORE A COMUNICAÇÃO</h5>
				<p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
			</div>
			<div class="col-md-4 col-lg-4 text-center">
				<img src="assets/img/otimize-tempo.png" class="img-responsive center-block"/>
				<h5 class="text-dark-gray">OTIMIZE O TEMPO</h5>
				<p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
			</div>
			<div class="col-md-4 col-lg-4 text-center">
				<img src="assets/img/melhore-resultados.png" class="img-responsive center-block"/>
				<h5 class="text-dark-gray">MELHORE OS RESULTADOS</h5>
				<p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
			</div>
		</div>
	</section>
	<section id="video" class="bg-white">
		<div class="container">
			<div class="col-md-7 col-lg-7">
				<div class="vertical-align-content">
					<img src="assets/img/conections.png" class="img-responsive"/>
				</div>
			</div>
			<div class="col-md-5 col-lg-5">
				<div class="vertical-align-content">
					<h2>Modelo pioneiro de comunicação entre profissionais de saúde e insituições</h2>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="col-md-4 col-lg-4">
				<img src="assets/img/logo-medvelox-sm.png" class="logo img-responsive"/>
			</div>
			<div class="col-md-4 col-lg-4">
				<p class="text-center"><small>©Medvelox 2015 - Todos os direitos reservados</small></p>
			</div>
			<div class="col-md-4 col-lg-4">
				<p class="text-right pull-right">
					<a href=""><small>política de privacidade</small></a> |
					<a href=""><small>termos de uso</small></a>
				</p>
			</div>
		</div>
	</footer>

    <?php require 'shared/javascript.php'; ?>
  </body>
</html>