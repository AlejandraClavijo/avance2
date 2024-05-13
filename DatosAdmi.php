<?php
class DatosAdmi {
    
    private $correo_adm;
    private $contrasena_adm;
    
   
    public function __construct($correo_adm, $contrasena_adm) {
        $this->correo_adm = $correo_adm;
        $this->contrasena_adm = $contrasena_adm;
    }

    public function getCorreo_adm() {
        return $this->correo_adm;
    }

    public function getContrasena_adm() {
        return $this->contrasena_adm;
    }

    public function setCorreo_adm($correo_adm): void {
        $this->correo_adm = $correo_adm;
    }

    public function setContrasena_adm($contrasena_adm): void {
        $this->contrasena_adm = $contrasena_adm;
    }    
}
?>