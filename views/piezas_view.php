<?php
  
  include_once('view.php');

	class PiezasView extends View {

		function mostrarPiezas($piezas){
  			$this->smarty->assign('piezas',$piezas);
  			$this->smarty->display('index.tpl');

  		}

		

		function mostrarPieza($pieza){

  			$this->smarty->assign('pieza',$pieza);
  			$this->smarty->display('verpieza.tpl');

  		}
	}

?>