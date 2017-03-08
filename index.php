<?php
  
require('controllers/piezas_controller.php');
require ('config/config_app.php');

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)||$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
	   $controller = new PiezasController();
  	 $controller->mostrarHome();
  	die();
}
switch ($_REQUEST[ConfigApp::$ACTION]) {
  	
  	case ConfigApp::$ACTION_HOME:
  	$controller = new PiezasController();
    $controller->mostrarHome();
    break;


    case ConfigApp::$ACTION_VER_PIEZA:
    $controller = new PiezasController();
    $controller->mostrarPieza();
    break;
  
  default:
    
    echo 'Pagina no encontrada';
    break;
}

echo ConfigApp::$ACTION;
?>