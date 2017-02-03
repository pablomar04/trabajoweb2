<?php
require 'api.php';
require '../models/piezasModel.php';
class piezaApi extends Api
{
  private $model;
  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new PiezasModel();
  }
  protected function pieza($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){
            $pieza = $this->model->getPieza($argumentos[0]);
            $error['Error'] = "La pieza no existe";
            return ($pieza) ? $pieza : $error;
          }else{
            return $this->model->getpiezas();
          }
        break;
      case 'DELETE':
          if(count($argumentos)>0){
            $error['Error'] = "La pieza no existe";
            $success['Success'] = "La pieza se borro";
            $filasAfectadas = $this->model->eliminarPieza($argumentos[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
        break;
        case 'POST':
            if(count($argumentos)==0){
              $error['Error'] = "La pieza no se creo";
              $id_pieza = $this->model->crearPieza($_POST['pieza'],[]);
              return ($id_pieza > 0) ? $this->model->getpieza($id_pieza) : $error;
            }
          break;
      default:
           return "Only accepts GET";
        break;
    }
   }
}
 ?>