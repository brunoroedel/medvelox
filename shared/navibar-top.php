<!--navibar Top-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">          
      <button id="OpenMenuSmall">
        <span class="icon icon-menu"></span>
      </button>
      <button id="OpenSmallAlerts">
        <span class="icon icon-right-menu"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="<?php echo $img; ?>logo-medvelox.png" alt="Medvelox"/>
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
            <img src="<?php echo $img; ?>dr-paulo-niemayer.jpg" class="thumbnail-user img-circle" alt="Dr. Paulo Niemayer"/>
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
