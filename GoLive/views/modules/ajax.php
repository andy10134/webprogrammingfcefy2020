<?php

require_once "../../controllers/User.php";
require_once "../../models/User.php";
require_once "../../models/conexion.php";

class Ajax
{
    public function usernameValidateAjax($data)
    {
        $response = UserController::validateUsernameController($data);

        echo $response;
    }

    public function emailValidateAjax($data){
        $response = UserController::validateEmailController($data);
    }
    
    public function registerTrainnerAjax($id){
        $response = UserController::registerTrainnerController($id);
        echo $response;
    }
}

$a = new Ajax();

if(isset($_POST["username"])){
    $a -> usernameValidateAjax($_POST["username"]);
}else if(isset($_POST["email"])){
    $a -> emailValidateAjax($_POST["email"]);
}else if(isset($_POST["userId"])){
    $a -> registerTrainnerAjax($_POST["userId"]);
}
