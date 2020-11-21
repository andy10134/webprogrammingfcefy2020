<?php

class InstitutionModel{

    public function alta($Data)
    {
        $errores = '';
        $conexion = Conexion::conectar()->prepare(" INSERT INTO institutions (id, adress, phone, schedule, staff, socialMedia) 
        VALUES (null, adress, phone, schedule, staff, socialMedia)");

        $conexion->execute($Data);
    }

}