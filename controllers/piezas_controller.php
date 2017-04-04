<?php
	include_once 'controllers/controller.php';
	include_once 'views/piezas_view.php';
	include_once 'models/piezas_model.php';

	class PiezasController extends Controller{

		function __construct(){
			$this->view = new PiezasView();
			$this->model = new PiezasModel();
		}

		function mostrarHome(){
			$this->view->mostrarPiezas($this->model->getPiezas());
		}

		function mostrarHome2(){
			$this->view->mostrarHome2($this->model->getPiezas());
		}

		function mostrarPieza(){
			$this->view->mostrarPieza($this->model->getPieza());
		}

		function mostrarAbm(){
			$this->view->mostrarAbm();
		}



	}
?>