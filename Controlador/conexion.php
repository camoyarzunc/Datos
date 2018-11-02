<?php

class conexion {
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $base = "misperris";
    private $cone;

    function __construct() {
        try {
            $this->cone = mysqli_connect($this->server, 
                    $this->user, $this->pass, $this->base);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //insert, update, delete
    public function SqlOperacion($sql) {
        try {
            $resp = mysqli_query($this->cone, $sql);
            return mysqli_affected_rows($this->cone);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //select
    public function SqlSeleccion($sql) {
        try {
            $resp= mysqli_query($this->cone, $sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
