<?php

include_once 'conexion.php';
include_once '../modelo/Formulario.php';

class DaoFormulario {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //CRUD
    public function Crear($Postulante) {
        try {
            $sql = "insert into Postulante values('@Run','@Nombre','@Fecha_nacimiento',@ciudad_id_ciudad,@ciudad_region_id_region,'@Tipo_vivienda',@Telefono,'@Correo')";
            $sql = str_replace("@Run", $Postulante->getRun_postulante(), $sql);
            $sql = str_replace("@Nombre", $Postulante->getNombre(), $sql);
            $sql = str_replace("@Fecha_nacimiento", $Postulante->getFecha_nacimiento(), $sql);
            $sql = str_replace("@ciudad_id_ciudad", $Postulante->getCiudad(), $sql);
            $sql = str_replace("@ciudad_region_id_region", $Postulante->getRegion(), $sql);
            $sql = str_replace("@Tipo_vivienda",$Postulante->getTipo_vivienda(), $sql);
            $sql = str_replace("@Telefono",$Postulante->getTelefono(), $sql);
            $sql = str_replace("@Correo",$Postulante->getCorreo(), $sql);
            $filas_afectadas = $this->cone->SqlOperacion($sql);
            return $filas_afectadas;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
   

}
