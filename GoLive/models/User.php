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
            
            if($resultado["roleId"] == 3){
                $sentencia = $conexion->prepare('SELECT * FROM institutions WHERE userId = :id LIMIT 1');
                $sentencia -> bindParam(":id", $resultado["id"], PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $_SESSION["instId"] = $resultado["id"];
                $_SESSION["instName"] = $resultado["name"];
                $_SESSION["adress"] = $resultado["adress"];
            }

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

    public function validateEmailModel($userData){
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

    //Considerar utilizar una funcion que recibe el rol y el id del usuario
    public function registerTrainnerModel($id){
        $errores = '';
        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 4 where id= $id");

        $myInsert->execute();
        $_SESSION["roleId"] = 4;
        return($errores);
    }
    
    //Considerar utilizar una funcion que recibe el rol y el id del usuario
    public function registerUserModel($id){
        $errores = '';
        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 2 where id= $id");

        $myInsert->execute();
        $_SESSION["roleId"] = 2;
        return($errores);
    }
    
    public function updateRoleIdModel(){
        $id = $_SESSION["id"];
        $stmt = Conexion::conectar()->prepare("SELECT  roleId FROM users where id = $id");
        $stmt->execute();
        $response = $stmt ->fetch();
        $_SESSION["roleId"] = $response["roleId"];
    }
}
