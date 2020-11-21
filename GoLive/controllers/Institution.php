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
        }else if(isset($_POST["adress"]) && isset($_POST["phone"]) && isset($_POST["scheadule"]) && isset($_POST["staff"]) && isset($_POST["socialMedia"]))
        {   
            if(preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["adress"]) && 
            preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/', $_POST["phone"]) && 
            preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["scheadule"]) &&
            filter_var($_POST["socialMedia"], FILTER_VALIDATE_URL)
            )
            {
                $Data = array(
                    'adress'=> $_POST['adress'],
                    'phone' => $_POST['phone'],
                    'scheadule' => $_POST['scheadule'],
                    'staff'=>$_POST['staff'],
                    'socialMedia' => $_POST['socialMedia'],
                );
                $resultado = InstitutionModel::alta($Data);
                
                if($resultado == '')
                {
                    //header("Location: http://localhost/webprogrammingfcefy2020/Golive/");
                }
                else
                {
                    /*echo '<div class="alert alert-danger">Error al ingresar los datos, intente otra vez.</div>';
                    header("Location: ");*/
                }
                unset($_POST);
                
            }
        }
        else
        {
            //include 'views/modules/';
        }
        return('');
    }
    
}