<?php
include "nav.php";
?>

<main class="row align-items-center justify-content-center mt-3 mb-5">
  

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

  <div id="preloader"></div>

  <?php 
  include "footer.php";
   ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


<style>
@media (min-width: 993px) { 

  main{
    height: fit-auto;
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
  background: linear-gradient(45deg, rgba(11, 0, 80, 0.9) 0%, rgba(4, 210, 115, 0.9) 100%), url("../../../assets/app/img/hero-bg.jpg");
  background-size: cover;
  height: 100vh;
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
