<?php
require_once '../controlador/conector/conector.php';
class modelo_municipios{
    private $link;
    private $municipios;
    
    public function __construct(){
        $this->link=Conectar::conexion();
        $this->municipios=array();
    }
    
    public function cargar_municipios($idComunidad){
        $consulta=$this->link->query("CALL sp_mostrar_municipios_comunidad($idComunidad)");
        while($filas=$consulta->fetch_assoc()){
            $this->municipios[]=$filas;
        }
        return $this->municipios;
    }
}
