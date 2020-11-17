<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">GO LIVE</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo mr-auto"><img src="assets/img/logo2.png" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="drop-down"><a href="#">Deep Drop Down</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>

            </ul>
          </nav><!-- .nav-menu -->

          <a href="#about" class="get-started-btn scrollto">Get Started</a>
        </div>
	</div>
</header><!-- End Header -->

<main class="row align-items-center justify-content-center m-0">
  

  <section class="container col-lg-10 col-xs-11 row d-flex p-0">
    <div class="info col-lg-4 col-md-12 text-center d-flex flex-column justify-content-center " style="min-height: 85vh;">
      <img src="assets/app/img/34839d0e5658c919930ed9fd3c8b1437.png" class="imgform">
      <p class="h3 pt-1 pb-3">
        ¿Sos nuevo por acá?
      </p>
      <p class="lead pb-3">
        Comenza a manejar tus actividades de forma smart. ;)
      </p>
      <a class="boton" href="registrarse">
        Registrarse
      </a>
    </div>

    <div class="form col-lg-8 col-md-12 d-flex flex-column justify-content-center text-center">

    <h2 class="h2 p-0 m-0">
        Iniciar Sesión
    </h2>

       <form METHOD="POST" action="">
                <div class="form-group row d-flex flex-column align-items-center">
              
                    <input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 " type="username" name="username" placeholder="Nombre de usuario">
                    <input class="form-control  mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 " type="password" name="password" placeholder="Contraseña">
 
                    
                    <button type="submit" class=" boton rounded-pill mt-5 col-lg-4 col-md-6  ">Entrar</button>
                </div>
            </form>    
    </div>

  </section>

  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


<style>
@media (min-width: 993px) { 

  main{
    height: 60vh;
  }




  #header{
    position: unset;
  }

 }

 @media (min-height: 700px ) and (min-width: 370px) and (max-height: 737px) {
  body{
    padding-bottom: 27vw;
  }
 }

 @media (min-height: 738px ) and (min-width: 370px) and (max-height: 840px) {
  body{
    padding-bottom: 48vw;
  }
 }


@media (max-height: 1199px) { 
 }



@media (max-width: 992px ) and (min-width: 577px) {

  .info{
    border-radius: 40px 40px 0 0 !important;
  }
  .form{
    border-radius: 0 0 40px 40px  !important;
  }

}

@media (max-width: 767.98px ) {

  .form{
    padding: 12% !important;
  }
  .info{
    padding: 12% !important;
  }
  .container{
    margin: 5% 0 ;
  }
 }

 @media (max-width: 576px) { 

  .form{
    pading: 15% !important;
  }

  .form, .info{
    border-radius: 0 !important;
  }

  .container{
    padding: 0;
    margin:0;
  }

 
  }




body{
  width: 100%;
  background: linear-gradient(90deg, rgba(4,178,115,1) 0%, rgba(5,126,93,1) 18%, rgba(6,77,72,1) 30%, rgba(7,4,41,1) 62%,rgba(7,4,41,1) 100%);
}

.container{
  font-family: 'Poppins', sans-serif; 
}

.form{
  padding: 11% 5%;
  border-radius: 0 40px 40px 0;
}

.imgform{
  height: 165px;
  margin-bottom: 22px;
}

.lead{
  font-family: sans-serif;
}

h2.h2{
  color: #0B0050;
}

.info{
  padding: 5% ;
  color : #f9f8ff;
  background: #333a5aa3;
  border-radius: 40px 0 0 40px;
}

.boton{
  color: #fff;

  
  border: 2px solid #fff;
  border-radius: 30px;
  letter-spacing: 2px;
  transition: background .1s linear .1s;
}

a.boton {
  padding: 15px 60px;
}

.form .boton {
  padding: 15px 60px;
}

a.boton:hover{
  text-decoration: none;
  color: rgb(11,0,80);
  background-color: #fff;
  cursor: pointer;
}

.form{
  background-color: #fff;
}

form input{
  height: 15px;
}

form .boton{
  background-color: rgb(11,0,80);
  color: #fff;
}

form .boton:hover{
  background-color: #fff;
  color:  rgb(11,0,80);
  border: rgb(11,0,80) 1.5px solid;
}
</style>
