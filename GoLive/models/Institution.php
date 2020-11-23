<?php

class InstitutionModel{

    public function alta($Data)
    {
        $errores = '';
        $conexion = Conexion::conectar()->prepare(" INSERT INTO institutions (id, adress, phone, schedule, staff, socialMedia) 
        VALUES (null, adress, phone, schedule, null,socialMedia)");
        
        $conexion->execute($Data);

        $id = $_SESSION["id"];
        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 3 where id= $id");

        $myInsert->execute();
        return($errores);
    }

}