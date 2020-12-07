<?php

class InstitutionModel{

    public function alta($Data)
    {
        $errores = '';
        $id = array(
            ':userId' => $_SESSION["id"]
        );
        $conexion = Conexion::conectar()->prepare(" INSERT INTO institutions (id, name, adress, phone, schedule, staff, socialMedia, userId) 
        VALUES (null, :name, :adress, :phone, :schedule, :staff, :socialMedia, :userId)");
        $conexion->execute($Data);

        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 3 where id= :userId");
        $myInsert->execute($id);

        $stmt=Conexion::conectar()->prepare('SELECT id FROM institutions WHERE userId = :userId LIMIT 1');
        $stmt->execute($id);
        $resultado = $stmt->fetch();

        $_SESSION["roleId"] = 3;
        $_SESSION["instId"] = $resultado["id"];
        $_SESSION["instName"] = $Data[":name"];
        return($errores);
    }

    //DESTRUIR Y REARMAR SESION 
    public function removeInstitution()
    {
        $errores = '';
        $id = array(
            ':id' => $_SESSION["instId"]
        );
        $_SESSION["roleId"] = 2;

        $conexion = Conexion::conectar()->prepare("DELETE FROM institutions WHERE id = :id");
        $conexion->execute($id);
        
        $id = array(
            ':userId' => $_SESSION["id"]
        );

        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 2 where id= :userId");
        $myInsert->execute($id);
        

        return($errores);
    }

    public function registerTrainner($Data)
    {
        $errores = '';

        $id = array(
            ':instId' => $_SESSION["instId"]
        );

        $stmt=Conexion::conectar()->prepare('SELECT staff FROM institutions WHERE id = :instId LIMIT 1');
        $stmt->execute($id);
        $resultado = $stmt->fetch();

        if($resultado["staff"] == NULL){

            $IDs = array(
            ':idEntrenador' => $Data["id"],
            ':instId' => $_SESSION["instId"]
            );

            $myInsert = Conexion::conectar()->prepare("UPDATE institutions SET staff = :idEntrenador where id = :instId");
            $myInsert->execute($IDs);

        }else
        {
            $staff = $resultado["staff"].'/'.$Data["id"];

            $IDs = array(
                ':staff' => $staff,
                ':instId' => $_SESSION["instId"]
            );

            $myInsert = Conexion::conectar()->prepare("UPDATE institutions SET staff = :staff where id = :instId");
            $myInsert->execute($IDs);

        }
        return($errores);
    }
}