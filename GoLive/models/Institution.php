<?php

class InstitutionModel{

    public function alta($Data)
    {
        $errores = '';
        $id = array(
            ':userId' => $_SESSION["id"]
        );
        $conexion = Conexion::conectar()->prepare(" INSERT INTO institutions (id, adress, phone, schedule, staff, socialMedia, userId) 
        VALUES (null, :adress, :phone, :schedule, :staff, :socialMedia, :userId)");
        
        $conexion->execute($Data);

        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 3 where id= :userId");
        $_SESSION["roleId"] = 3;
        $myInsert->execute($id);
        return($errores);
    }

}