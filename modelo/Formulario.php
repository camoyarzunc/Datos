<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formulario
 *
 * @author May
 */
class Formulario {
    private $run_postulante;
    private $nombre;
    private $fecha_nacimiento;
    private $ciudad;
    private $region;
    private $tipo_vivienda;
    private $telefono;
    private $correo;
    
    function __construct() {
        
    }
    function getRun_postulante() {
        return $this->run_postulante;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getRegion() {
        return $this->region;
    }

    function getTipo_vivienda() {
        return $this->tipo_vivienda;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function setRun_postulante($run_postulante) {
        $this->run_postulante = $run_postulante;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setTipo_vivienda($tipo_vivienda) {
        $this->tipo_vivienda = $tipo_vivienda;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }


}
