<?php
  require 'pieza_api.php';
  try {
    $api_handler = new PiezaApi($_REQUEST['request']);
    echo $api_handler->processAPI();
  } catch (Exception $e) {
      echo json_encode(Array('error' => $e->getMessage()));
  }
 ?>
