<?php
  
  include_once('view.php');

	class PiezasView extends View {

		function mostrarHome(){
  			//$this->smarty->assign('piezas',$piezas);
  			$this->smarty->display('index.tpl');

  		}

		

		function mostrarPieza($pieza){

  			$this->smarty->assign('pieza',$pieza);
  			$this->smarty->display('verpieza.tpl');

  	}

    function mostrarAbm(){
      $this->smarty->display('abm.tpl');
    }

    function mostrarHome2($piezas){
      $this->smarty->assign('piezas',$piezas);
      $this->smarty->display('home.tpl');
    }
	}

?>