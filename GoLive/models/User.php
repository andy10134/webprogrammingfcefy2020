<?php

class UserModel
{
    public function loginModel($datosController)
    {
        $errores = '';
        $conexion = Conexion::conectar();
        $sentencia = $conexion->prepare('SELECT * FROM users WHERE username = :usuario LIMIT 1');
        $sentencia -> bindParam(":usuario", $datosController["usuario"], PDO::PARAM_STR);
        $sentencia->execute();

        $resultado = $sentencia->fetch();
        
        if (!empty($resultado))
        {
            if($resultado["password"] == $datosController["password"])
            {
                
            $_SESSION["validar"] = true;
            $_SESSION["id"] = $resultado["id"];
            $_SESSION["roleId"] = $resultado["roleId"];
            $_SESSION["genderId"] = $resultado["genderId"];
            $_SESSION["name"] = $resultado["name"];
            $_SESSION["lastName"] = $resultado["lastName"];
            $_SESSION["phoneNum"] = $resultado["phoneNum"];
            $_SESSION["email"] = $resultado["email"];
		    $_SESSION["username"] = $datosController["usuario"];

            }
            else
            {
                $errores .= 'Contraseña o usuario incorrecto.';
            }
        }
        else
        {
            $errores .= 'Contraseña o usuario incorrecto.';
        }
        return($errores);
    }

    public function signupModel($userData)
    {

        $stmt = Conexion::conectar()->prepare(" INSERT INTO users (id, roleId, genderId, name, lastName, phoneNum, email, username, password) 
                                                VALUES (null, :roleId, :genderId, :name, :lastName, :phoneNum, :email, :username,:password )");
        $stmt->execute($userData);

        $stmt=Conexion::conectar()->prepare('SELECT id FROM users WHERE username = :username LIMIT 1');
        $stmt->execute($userData[":username"]);
        $resultado = $stmt->fetch();
        $_SESSION["validar"] = true;
        $_SESSION["id"] = $resultado;
        $_SESSION["roleId"] = $userData[":roleId"];
        $_SESSION["genderId"] = $userData[":genderId"];
        $_SESSION["name"] = $userData[":name"];
        $_SESSION["lastName"] = $userData[":lastName"];
        $_SESSION["phoneNum"] = $userData[":phoneNum"];
        $_SESSION["email"] = $userData[":email"];
		$_SESSION["username"] = $userData[":username"];
    }

    public function validateUsernameModel($userData)
    {
        $stmt = Conexion::conectar()-> prepare("SELECT name from users WHERE username = :username");
        $stmt -> execute($userData);
        return $stmt ->fetch();
    }

    public function validateEmailController($userData){
        $stmt = Conexion::conectar()-> prepare("SELECT name from users WHERE email = :email");
        $stmt -> execute($userData);
        return $stmt ->fetch();
    }

    public function profileImageModel($profileImage)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE users SET profileImage = :profileImage WHERE id = :id");
        /*return*/ $stmt -> execute($profileImage);
        $stmt = Conexion::conectar() -> prepare("SELECT profileImage FROM users WHERE id = :id");
        $stmt->execute(array(':id' => $profileImage[':id']));
        return $stmt ->fetch();
    }

    public function registerTrainner(){
        $errores = '';
        $id = $_SESSION["id"];
        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 4 where id= $id");

        $myInsert->execute();
        return($errores);
    }
}
