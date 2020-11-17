<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
            <h1 class="logo"><a href="">GO LIVE</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
            <a href="" class="logo mr-auto"><img src="assets/app/img/logo2.png" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#contact">Contacto</a></li>

            </ul>
          </nav><!-- .nav-menu -->
          <?php
          if (!isset($_SESSION["id"])) {
            echo'<a href="ingresar" class="get-started-btn scrollto">Iniciar Sesión</a>
             <a href="registrarse" class="get-started-btn scrollto">Registrarse</a>';  
          }else{
            echo '<a href="salir" class="get-started-btn scrollto">Salir</a>';
          }
          ?>
          </div>
	</div>
</header><!-- End Header -->