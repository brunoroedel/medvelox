<?php
  echo '

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
                  <div class="label">Copa DOr</div>
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
                  <div class="label">Copa DOr</div>
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
  ';
?>