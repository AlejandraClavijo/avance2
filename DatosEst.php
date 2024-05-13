<?php
class DatosEst {
    private $nombres;
    private $apellidos;
    private $curso;
    private $cedula;
    private $correo;
    private $contrasena;
    private $confirmacion;

    public function __construct($nombres, $apellidos, $curso, $cedula, $correo, $contrasena, $confirmacion) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->curso = $curso;
        $this->cedula = $cedula;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->confirmacion = $confirmacion;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getConfirmacion() {
        return $this->confirmacion;
    }

    public function setNombres($nombres): void {
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }

    public function setCedula($cedula): void {
        $this->cedula = $cedula;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

    public function setConfirmacion($confirmacion): void {
        $this->confirmacion = $confirmacion;
    }


}
?>