<?php

class InstitutionController{

    public function altaController()
    {
        if (empty($_SESSION)) {
            echo '<script type="text/javascript">
            function redireccionar(){
            window.location.replace("http://localhost/webprogrammingfcefy2020/Golive/"); 
            } 
            redireccionar();
            </script>';
        }else if(isset($_POST["name"]) && isset($_POST["adress"]) && isset($_POST["phone"]) && isset($_POST["socialMedia"]) && isset($_POST["dia-1"]) && isset($_POST["hora-apertura-1"]) && isset($_POST["hora-cierre-1"]))
        {   
            if(preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["name"]) && 
            preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["adress"]) && 
            preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/', $_POST["phone"]) && 
            filter_var($_POST["socialMedia"], FILTER_VALIDATE_URL)
            )
            {
                $contador = 1;
                $schedule = '';
                while(isset($_POST['dia-'.$contador])){
                    $schedule .= $_POST['dia-'.$contador].' '.$_POST['hora-apertura-'.$contador].' '.$_POST['hora-cierre-'.$contador];
                    $contador ++;
                }
                $Data = array(
                    ':name'=> $_POST['name'],
                    ':adress'=> $_POST['adress'],
                    ':phone' => $_POST['phone'],
                    ':schedule' => $schedule,
                    ':staff' => '',
                    ':socialMedia' => $_POST['socialMedia'],
                    ':userId' => $_SESSION['id']
                );

                var_dump($Data);
                $resultado = InstitutionModel::alta($Data);
                
                if($resultado == '')
                {
                    header("Location: http://localhost/webprogrammingfcefy2020/Golive/perfilInstitucion");
                }
                else
                {
                    echo '<div class="alert alert-danger">Error al ingresar los datos, intente otra vez.</div>';
                }
                unset($_POST);
                
            }
        }
        else
        {
            include 'views/modules/alta-institucion.php';
        }
        return('');
    }
 
    
    public function profileController()
    {
        include "views/modules/atlantis/index.php";
        return '' ; 
    }

    public function removeInstitution()
    {
        $resultado = InstitutionModel::removeInstitution();
        header("Location: http://localhost/webprogrammingfcefy2020/Golive/");
        return '' ; 
    }
}