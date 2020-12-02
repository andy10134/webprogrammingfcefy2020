<?php
include "views/modules/nav.php";
?>

<div class="container bootstrap snippets bootdey">
<div class="row"  style="margin-top:90px;">
  <div class="profile-nav col-md-4">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <?php
              echo('<h1 class="mt-2">'.$_SESSION["name"].' '.$_SESSION["lastName"].'</h1>
                    <p>'.$_SESSION["email"].'</p><p id="id-user" style="display: none;">'.$_SESSION["id"].'</p>');
              
                    UserController::updateRoleIdController();
                
                if($_SESSION["roleId"] == 4){
                    echo('<p>ENTRENADOR</p>');  
                }
            ?>
          </div>

          <div class="nav nav-pills nav-stacked row cont list-group cont" id="list-tab" role="tablist">
          <a class="elem  active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="icofont-contacts"></i> Actividad Reciente</a>
          <a class="elem " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="icofont-spanner"></i>Ajustes de cuenta</a>
        
        </div>

     



      </div>
      <div class="alta-gym">
        <a class="btn btn-outline-dark" href="Alta-Institucion"><i class="icofont-gym-alt-3"></i> Registra tu Institución</a>
          <?php
          if($_SESSION["roleId"] != 4){
            echo('<a class="btn btn-outline-success" id="trainner-button" style="min-width: 218.96px;" > <i class="icofont-whistle-alt"></i> Cuenta Entrenador</a>');  
          }else{
            echo('<a class="btn btn-outline-success" id="userAccount-button"  style="min-width: 218.96px;"><i class="icofont-runner-alt-1"></i> Ya no soy entrenador</a>'); 
          }
          ?>
      </div>
  </div>
  <div class="profile-info col-md-8">
      
      

      <div class="panel">

          <div class="bio-graph-heading" id="frase">
              
          </div>
          
      </div>
     

      

      <div class="tab-content" id="nav-tabContent">

       <div class="schedules tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <div class="h3 text-center">Tus Horarios</div>
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="red">Envato Website</h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="terques">ThemeForest CMS </h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="green">VectorLab Portfolio</h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="purple">Adobe Muse Template</h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div></div>


    <div class="info d-flex justify-content-center row fade tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <h3 class="mb-5 text-white col-10 p-0">Ajustes de cuenta</h2>
      <form class="form-inline col-12 d-flex justify-content-center mb-4">
      <div class="form-group mb-2">
        <label for="staticEmail2" class="sr-only">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nombre">
      </div>
      <div class="form-group mx-sm-3 mb-2 ">
        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="">
      </div>
      <button type="submit" class="btn btn-dark mb-2">Confirmar</button>
</form>

      <form class="form-inline col-12 d-flex justify-content-center mb-4">
      <div class="form-group mb-2">
        <label for="staticEmail2" class="sr-only">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Email">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="">
      </div>
      <button type="submit" class="btn btn-dark mb-2">Confirmar</button>
     </form>

      <form class="form-inline col-12 d-flex justify-content-center mb-4">
      <div class="form-group mb-2">
        <label for="staticEmail2" class="sr-only">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Telefono">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="">
      </div>
      <button type="submit" class="btn btn-dark mb-2">Confirmar</button>



    </form>
    </div>
      

      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga dignissimos mollitia quia iste cupiditate veritatis, fugit obcaecati ut voluptatem repellendus. Quas consequatur mollitia, quo eos debitis unde reiciendis, a.</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, harum eius, nihil rerum, magnam consequatur libero modi sapiente maxime, inventore voluptatum at ipsum vitae error rem reiciendis dolorem neque repellat.</div>
    </div>

  </div>
</div>
</div>



<div id="preloader"></div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

  var frases = [];
  frases.push("Tu eres tu único límite");
  frases.push("No pares cuando estés cansado, detente cuando hayas terminado");
  frases.push("Limpia tu mente del no puedo");

  var frase = document.getElementById("frase");
  frase.innerHTML = frases[Math.floor(Math.random() * frases.length)];



</script>



<?php
  include "views/modules/footer.php";
  ?>


<style type="text/css">
  body {
    color: #797979;
    background: linear-gradient(45deg, rgba(11, 0, 80, 0.9) 0%, rgba(4, 210, 115, 0.9) 80%), url("./././assets/app/img/SimpleShiny.png") center repeat ;;
    font-family: 'Poppins', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

i{
  color: #fff !important;
}

.panel{
  margin-top: 2.5%;
}

.panel-body{
  color: #d9534f;
  background: #f9fbff;
  margin-top: 3%;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav .cont {
    margin-top: 1px;
}

.profile-nav .cont > .elem {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;

    line-height: 30px;
}

.profile-nav .cont > .elem:last-child {
    border-bottom: none;
}

.profile-nav .cont > .elem  {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #f9f8ff;
}

.profile-nav .cont > .elem:hover, .profile-nav .cont > .elem > a:focus, .profile-nav .cont .elem.active  a {

    color: #f8f9ff im !important;
}

.profile-nav .cont > .elem:last-child  {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav .cont > .elem > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    width: fit-content;
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.alta-gym{
  padding: 10% 5%;
  text-align: center; 
  margin-top: 2vh;
  color:#f9f8ff;
}


.alta-gym a{
  margin-top: 10px;
  color: #f8f9ff;
}
.alta-gym a:hover{
  border: 1px solid #fff;
}

.bio-graph-info{
  border: 1px solid #0b0050;
  padding: 4%;
}

.bio-graph-heading {
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info p{
    font-size: 1.6em;
}

.bio-graph-info h1 {
    color: #0b0050;
    font-size: 28px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.bio-desk{
  color: #f9f8ff;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}

.schedules{
  margin: 5% 0;
}

.schedules .h3{
  color: #f9f8ff;
}

.container{
  padding-bottom: 3%;
}


.form-control-plaintext {
  color:#f8f9ff ;
}

.info{
  padding:10%;
}

</style>