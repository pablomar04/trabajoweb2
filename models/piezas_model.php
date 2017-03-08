<?php
	include_once 'model.php';
	class PiezasModel extends Model{



		function getPiezas(){
			$sentencia = $this->db->prepare('SELECT * from piezas INNER JOIN campanias on piezas.fk_id_campania=campanias.id_campania');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

		/*function getPieza(){
			$pieza=$_REQUEST['id_pieza'];
			$sentencia = $this->db->prepare('SELECT * from piezas INNER JOIN campanias on piezas.fk_id_campania=campanias.id_campania INNER JOIN imagenes on imagenes.fk_id_pieza=piezas.id where piezas.id='.$pieza);
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}*/

		function getPieza($id_pieza){
			$sentencia = $this->db->prepare('SELECT * from piezas where id_pieza=?');
			$sentencia->execute(array($id_pieza));
			return $sentencia->fetch(PDO::FETCH_ASSOC);
		}

		function getCampanias(){
			$sentencia = $this->db->prepare('SELECT * from campanias');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

	}

?>