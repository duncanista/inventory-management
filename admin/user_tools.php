<?php
$path = dirname(dirname(__FILE__));
include $path . "/config/connection.php";
include $path . "/config/config.php";

function login($email, $password){
      session_start();
      $error = true;
      $message = "La contraseña o el correo son incorrectos.";
      $password = md5($password);
      $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
      if($result = simpleQuery($query)){
            if($result->num_rows > 0){
                  $error = false;
                  $message = "";
                  $result_data = $result->fetch_assoc();
                  $_SESSION["user"] = $result_data["name"] . " " . $result_data["lastname"];
                  $_SESSION["user_type"] = $result_data["type"];
            }
      }
      return array("success"=>$error, "message"=>$message);
}

function logout(){
      session_start();
      session_destroy();
}

function isLogged(){
      session_start();
      $logged = false;
      if(isset($_SESSION["user"])){
            $logged = true;
      }
      return $logged;
}
function redirect(){
      echo "<script> window.location.href = '" . SITE . "'; </script>";
}

if(isset($_POST["email"]) && isset($_POST["pass"])){
      $email = $_POST["email"];
      $password = $_POST["pass"];
      $data = login($email, $password);
      exit(json_encode(array("success"=> $data["success"], "message" => $data["message"])));
}

?>