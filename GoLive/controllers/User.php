<?php



class UserController
{
    public function loginController()
    {
        if (!empty($_SESSION)) {
            echo '<script type="text/javascript">
            function redireccionar(){
            window.location.replace("http://localhost/webprogrammingfcefy2020/Golive/"); 
            } 
            redireccionar();
            </script>';
        }else if(isset($_POST["username"]) && isset($_POST["password"]))
        {   
            if( preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["username"]) &&
                preg_match('/^(?=.*[A-Z])(?=.*[!@#$&*._-])(?=.*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,15}$/', $_POST["password"]))
            {
                $contraseña = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$'); //encriptamos la contraseña
                $datosController = array("usuario"=>$_POST["username"],
                                        "password"=>$contraseña);

                $resultado = UserModel::loginModel($datosController);
                
                if($resultado == '')
                {
                    echo '<div class="alert alert-success">Inicio sesion correctamente!</div>';
                }
                else
                {
                    echo '<div class="alert alert-danger">Contraseña o usuario incorrecto.</div>';
                }
                unset($_POST);
            }
        }
        else
        {
            include 'views/modules/login.php';
        }
        return('');
    }

    public function signupController()
    {
        if (!empty($_SESSION)) {
            echo '<script type="text/javascript">
            function redireccionar(){
            window.location.replace("http://localhost/webprogrammingfcefy2020/Golive/"); 
            } 
            redireccionar();
            </script>';
        }else if( isset($_POST["firstName"]) &&
            isset($_POST["lastName"]) &&
            isset($_POST["username"]) &&
            isset($_POST["email"]) &&
            isset($_POST["phoneNum"]) &&
            isset($_POST["password"]) &&
            isset($_POST["gender"]))
        {

            echo(preg_match('/^[a-zA-Z\s]+$/', $_POST["firstName"]));
            echo(preg_match('/^[a-zA-Z\s]+$/', $_POST["lastName"]));
            echo(preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["username"]));
            echo(preg_match('/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/', $_POST["email"]));
            echo(preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/', $_POST["phoneNum"]));
            echo(preg_match('/^(?=.*[A-Z])(?=.*[!@#$&*._-])(?=.*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,15}$/', $_POST["password"]));
            echo(preg_match('/^[1-3]{1,1}$/', $_POST["gender"]));

            if( 
                preg_match('/^[a-zA-Z\s]+$/', $_POST["firstName"]) &&
                preg_match('/^[a-zA-Z\s]+$/', $_POST["lastName"]) &&
                preg_match('/^[a-zA-Z0-9\s]+$/', $_POST["username"]) &&
                preg_match('/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/', $_POST["email"]) &&
                preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/', $_POST["phoneNum"]) &&
                preg_match('/^(?=.*[A-Z])(?=.*[!@#$&*._-])(?=.*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,15}$/', $_POST["password"]) && // REVISAR EXPRESION REGULAR
                preg_match('/^[1-3]{1,1}$/', $_POST["gender"]))
            {
                $password = crypt($_POST['password'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$'); //encriptamos la contraseña

                $userData = array(
                    ':roleId' => 2,
                    ':genderId'=> $_POST['gender'],
                    ':name' => $_POST['firstName'],
                    ':lastName' => $_POST['lastName'],
                    ':phoneNum'=>$_POST['phoneNum'],
                    ':email' => $_POST['email'],
                    ':username' => $_POST['username'],
                    ':password' => $password
                );
                $response = UserModel::signupModel($userData);
                echo '<div class="alert alert-success">Inicio sesion correctamente!</div>';
            }
            else
            {
                echo '<div class="alert alert-danger">Error al ingresar los datos, intente otra vez.</div>';
            }
        }else 
        {
            include "views/modules/signup.php";
        }

        return "";
    }

    public function profileController()
    {
        include "views/modules/app/profile.php";
        return '' ; 
    }

    public function validateUsernameController($data)
    {

        $dataModel = array(
            ":username" => $data
        );
        $response = UserModel::validateUsernameModel($dataModel);

        if($response)
        {
            echo 1;
        }else
        {
            echo 0;
        }
    }

    public function validateEmailController($data){
        
        $dataModel = array(
            ":email" => $data
        );
        $response = UserModel::validateEmailController($dataModel);

        if($response)
        {
            echo 1;
        }else
        {
            echo 0;
        }
    }
    
    public function profileImageController()
    {
        if (isset($_POST['subir'])) {
            $archivo = $_FILES['archivo']['name'];
            if (isset($archivo) && $archivo != "") {
                $tipo = $_FILES['archivo']['type'];
                $tamano = $_FILES['archivo']['size'];
                $temp = $_FILES['archivo']['tmp_name'];

                if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                    echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
                }
                else {
                    if (move_uploaded_file($temp, 'assets/uploads/'.$archivo)) {
                        chmod('assets/uploads/'.$archivo, 0777);
                        echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                        echo '<p><img src="assets/uploads/'.$archivo.'"></p>';
                    }
                    else {
                        echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                    }
                }
            }
        }else{
            include 'views/modules/form.php';
        }
        return '';
    }
}
