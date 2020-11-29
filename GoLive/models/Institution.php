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
        $_SESSION["instId"] = $resultado;
        $_SESSION["instName"] = $Data[":name"];
        return($errores);
    }

    public function removeInstitution()
    {
        $errores = '';
        $id = array(
            ':userId' => $_SESSION["id"],
            ':id' => $_SESSION["instId"]
        );
        $myInsert = Conexion::conectar()->prepare("UPDATE users SET roleId = 2 where id= :userId");
        $myInsert->execute($id);
        
        $_SESSION["roleId"] = 2;

        $conexion = Conexion::conectar()->prepare("DELETE FROM institutions WHERE id = :id");
        $conexion->execute($id);

        return($errores);
    }
}