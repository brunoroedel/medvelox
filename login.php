<!DOCTYPE html>
<html lang="en">
  <?php require 'shared/head.php'; ?>
  
  <body>
    <div class="container-fluid no-margin no-padding">      
      <div class="row no-margin">
        <div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1">
          <h1 class="login">
            <img src="assets/img/logo-medvelox.png" alt="Medvelox">
          </h1>
          <form>
            <span class="input input--nariko block">
              <input class="input__field input__field--nariko" type="text" id="input-02" value="" placeholder="email">
              <label class="input__label input__label--nariko">
                <span class="input__label-content input__label-content--nariko" for="input-02">
                  Usuário
                </span>
              </label>
            </span>
            <span class="input input--nariko block no-margin">
              <input class="input__field input__field--nariko" type="text" id="input-02" value="" placeholder="credenciais">
              <label class="input__label input__label--nariko">
                <span class="input__label-content input__label-content--nariko" for="input-02">
                  Senha
                </span>
              </label>
            </span>
            <div class="spacer sm"></div>

            <div class="checkbox pull-left no-margin">
              <input type="checkbox" id="check1">
              <label for="check1">Manter-me conectado</label>
            </div>
            <a href="" class="pull-right"><small>Não consegue acessar sua conta</small></a>
            <div class="spacer lg"></div>
            <a href="rounds/index.php" class="btn btn-danger btn-lg btn-block">Entrar</a>
            <p class="basic-margin text-center">ou</p>
            <a href="round.html" class="btn btn-no-background pink btn-lg btn-block">Criar minha conta</a>
          </form>
        </div>
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-6 col-md-6 max-height bg-login hidden-xs hidden-sm">
          <h2 class="login">Uma nova maneira de compartilhar informações, ideias e oportunidades entre profissionais e instituições de saúde.</h2>
        </div>
      </div>
    </div>
    <footer class="login">
      <div class="container-fluid logout no-margin no-padding">
        <div class="row">
          <div class="col-lg-4 col-lg-offset-1">
            <p class="text-center">© Medvelox 2015 - Todos os direitos reservados</p>
          </div>
        </div>
      </div>
    </footer>   

    <?php require 'shared/javascript.php'; ?>
  </body>
</html>