<?php 
require_once '../modelo/modelo_municipios.php';
$id = 16;
$cont=new modelo_municipios();
$datos=$cont->cargar_municipios($id);

$municipios = json_encode($datos);
print $municipios;  
