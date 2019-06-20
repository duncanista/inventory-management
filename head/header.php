<?php 
session_start();
$path = dirname(dirname(__FILE__));
include $path . "/config/config.php";
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
      <meta charset="utf-8">
      <meta name="description" content="Sistema de Inventario para la Escuela de Ingeniería y Ciencias del Tecnológico de Monterrey, Campus Estado de México.">
      <meta name="author" content="duncanista">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta property="og:url" content="">
      <meta property="og:title" content="POIS en línea.">
      <meta property="og:description" content="Sistema de Inventario para la Escuela de Ingeniería y Ciencias del Tecnológico de Monterrey, Campus Estado de México.">
      <meta property="og:image" content="">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha256-bLNUHzSMEvxBhoysBE7EXYlIrmo7+n7F4oJra1IgOaM=" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js" integrity="sha256-JIBDRWRB0n67sjMusTy4xZ9L09V8BINF0nd/UUUOi48=" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.3/css/fileinput.css" integrity="sha256-QWXMRz8VTFlR3BLuXlzFrL3rnF1WODR0cTkZ8uPpcXk=" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.3/js/fileinput.js" integrity="sha256-fDDQW0wI2MiX9URtAHpqaqkGSnxFL7eZePRTSk3E58I=" crossorigin="anonymous"></script>
      <script src="<?=SITE;?>/js/locales/es.js"></script>

      <link rel="stylesheet" href="<?=SITE; ?>/css/styles.css">
      <title>POIS en línea.</title>
</head>
<body>
