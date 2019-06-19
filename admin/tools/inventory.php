<?php
$path = dirname(dirname(dirname(__FILE__)));
include $path . "/config/connection.php";
include $path . "/config/config.php";

function isBarcode($barcode){
      $success = false;
      $quantity = 0;
      $message = "No hay información para ese código de barras.";
      $query = "SELECT id, quantity FROM inventory WHERE id = '$barcode'";
      if($result = simpleQuery($query)){
            if($result->num_rows > 0){
                  $result_data = $result->fetch_assoc();
                  $success = true;
                  $quantity = $result_data["quantity"];
                  $message = "";
            }
      }
      $data = array("success" => $success, "message" => $message, "quantity" => $quantity);
      return $data;
}

if(isset($_POST["barcodeCheck"]) && isset($_POST["barcode"])){
      if($_POST["barcodeCheck"]){
            $barcode = $_POST["barcode"];
            $data = isBarcode($barcode);
      }
      exit(json_encode(array("success"=> $data["success"], "message" => $data["message"], "quantity" => $data["quantity"])));
}

?>