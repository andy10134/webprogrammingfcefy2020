<?php
include "nav.php";
?>

<main class="row align-items-center justify-content-center mt-2 mb-5">
  

  <section class="container col-lg-10 col-xs-11 row d-flex p-0">
    <div class="info col-lg-4 col-md-12 text-center d-flex flex-column justify-content-center ">
      <img src="assets/app/img/imgform.png" class="imgform">
      <p class="h3 pt-1 pb-3">
       Actualiza tu cuenta a Institución ;)
      </p>
      <p class="lead pb-3">
        Disfruta de los beneficios de trabajar con nosotros
      </p>
      
    </div>

    <div class="form col-lg-8 col-md-12 d-flex flex-column justify-content-center text-center">

    <h2 class="h2 p-0 m-0">
       Actualiza tu cuenta
    </h2>

       <form METHOD="POST" action="" >
               <div class="form-group row d-flex flex-column align-items-center" id="formulario">

                        <input required class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="name" placeholder="Nombre de la Institución" id="name">
                        <input required class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="adress" placeholder="Direccion" id="adress">
                        <input required class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="phone" placeholder="Teléfono" id="phone">
                        <input required class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="socialMedia" placeholder="Sitio Web" id="socialMedia">

                        <h2 class="h2 mt-3">Horarios</h2>
                        
                        <div class="form-row pt-3 pb-3 pl-0 pr-0 col-lg-8 col-md-10 col-xs-12">
                          <div class="col">

                            <select class="form-control" id="dia" name="dia-1">
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Martes</option>
                                <option value="Miercoles">Miércoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                                <option value="Sábado">Sábado</option>
                            </select>

                          </div>
                          <div class="col">

                            <input class="form-control pt-3 pb-3" type="time" id="hora-apertura" name="hora-apertura-1">

                          </div>
                          <div class="col">

                            <input class="form-control pt-3 pb-3" type="time" id="hora-cierre" name="hora-cierre-1">

                          </div>
                        </div>

                        <div class="form-row pt-3 pb-3 pl-0 pr-0 col-lg-8 col-md-10 col-xs-12">
                          <div class="col">

                            <select class="form-control" id="dia" name="dia-1">
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Martes</option>
                                <option value="Miercoles">Miércoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                                <option value="Sábado">Sábado</option>
                            </select>

                          </div>
                          <div class="col">

                            <input class="form-control pt-3 pb-3" type="time" id="hora-apertura" name="hora-apertura-1">

                          </div>
                          <div class="col">

                            <input class="form-control pt-3 pb-3" type="time" id="hora-cierre" name="hora-cierre-1">

                          </div>
                        </div>

                        <!--<div class="invalid-feedback">
                          Nombre de usuario no valido :(
                        </div>-->

                        

                        <button class="btn btn-outline-primary mt-3" id="add_button">
                          <i class="icofont-plus"></i>
                        </button>
                       
                        <button type="submit" class=" boton rounded-pill mt-2 col-md-6 col-xs-8 " id="submitButton">Actualizar</button>
                    </div>
            </form>    
    </div>

  </section>

  </main>

  <?php include "footer.php" ?>

  <div id="preloader"></div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script>
    var elemento = document.getElementById("add_button");
    var form     = document.getElementById("formulario");
    var inputs   = [];
    var contador = 2;
    function clonar(){
        var dia      = document.getElementById ("dia");
        var hora1     = document.getElementById("hora-apertura");
        var hora2     = document.getElementById("hora-cierre");
        inputs[0] = dia.cloneNode(true);
        inputs[1] = hora1.cloneNode(true);
        inputs[2] = hora2.cloneNode(true);

        inputs[0].setAttribute("name", "dia-"+ String(contador)) ; 
        inputs[0].setAttribute("id", "dia-"+ String(contador)) ;
        inputs[1].setAttribute("name", "hora-apertura-"+ String(contador)) ; 
        inputs[1].setAttribute("id", "hora-apertura-"+ String(contador)) ;
        inputs[2].setAttribute("name", "hora-cierre-"+ String(contador)) ; 
        inputs[2].setAttribute("id", "hora-cierre-"+ String(contador)) ;
        contador ++;
        inputs[0].classList.add("mt-5");

        formulario.insertBefore(inputs[0], elemento);
        formulario.insertBefore(inputs[1], elemento);
        formulario.insertBefore(inputs[2], elemento);
    }
    elemento.addEventListener("click", clonar, false);

    frase.innerHTML = frases[Math.floor(Math.random() * frases.length)];

    var arre = document.getElementsByClassName("get-started-btn");
    for (var el of arre){
        el.style.display = "none";
    }

  </script>

</body>
</html>


<style>

main{
    height: fit-content;
  }

@media (min-width: 993px) { 

  

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
  background: linear-gradient(45deg, rgba(11, 0, 80, 0.9) 0%, rgba(4, 210, 115, 0.9) 100%), url("./././assets/app/img/hero-bg.jpg");
  background-size: cover;
  height: 100vh;
}

.container{
  font-family: 'Poppins', sans-serif; 
}

.form{
  padding: 5% 5% 4% 5%;
  border-radius: 0 40px 40px 0;
  background-color: #fff;
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
  /*background: #333a5aa3;*/
	background: linear-gradient(90deg, rgba(11,0,80,0.64) 0%, rgba(7,4,41,0.64) 100%);
  border-radius: 40px 0 0 40px;
}

main{
    height: fit-auto;
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
