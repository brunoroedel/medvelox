<?php
  echo '
    <!--Alert Box-->
    <div id="alertBox">
      <div class="title">
        <h5>Tarefas</h5>
      </div>

      <!--just for mobile screens-->
      <div id="CloseSmallAlerts">
        <div class="icon">
          <span class="glyphicon glyphicon-remove"></span>
        </div>
        <div class="label">Fechar Tarefas</div>
      </div>
      <!--/ just for mobile screens-->

      <!--Task 01-->
      <div class="panel-group basic-margin horizontal">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#task-01">
                COPA DOr <span class="badge">2</span>
                <div class="chevron in">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </div>
              </a>
            </h4>
          </div>
          <div id="task-01" class="panel-collapse collapse in" >
            <div class="panel-body">
              <h5>Bernardo Joaquim</h5>
              <h6>CTI Cardiaco - Leito 5</h6>
            </div>
            <div class="panel-body">
              <h5>Bruno Roedel</h5>
              <h6>CTI Cardiaco - Leit0 1</h6>
              <div class="checkbox">
                <input type="checkbox" id="check1">
                <label for="check1">Colher exames</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" id="check2">
                <label for="check2">Medir temperatura</label>
              </div>
            </div>
          </div>
        </div>     
      </div>
      <!--/ Task 01-->

      <!--Task 02-->
      <div class="panel-group basic-margin horizontal">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#task-02">
                São Vicente de Paula <span class="badge">2</span>
                <div class="chevron">
                  <span class="glyphicon glyphicon-chevron-down"></span>
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </div>
              </a>
            </h4>
          </div>
          <div id="task-02" class="panel-collapse collapse">
            <div class="panel-body">
              <h5>Bernardo Joaquim</h5>
              <h6>CTI Cardiaco - Leito 5</h6>
            </div>
            <div class="panel-body">
              <h5>Bruno Roedel</h5>
              <h6>CTI Cardiaco - Leit0 1</h6>
              <div class="checkbox">
                <input type="checkbox" id="check3">
                <label for="check3">Colher exames</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" id="check4">
                <label for="check4">Medir temperatura</label>
              </div>
            </div>
          </div>
        </div>     
      </div>
      <!--/ Task 02-->
    </div>
    <!--/Alert Box-->
  ';
?>