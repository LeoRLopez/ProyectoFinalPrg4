<?php
include ('./funcionesApi.php');

if (isset($_POST['action'])){
$usr = $_POST['usr'];
$pass = $_POST['pass'];
$token = token($usr,$pass);
//echo $token;
if ($token!=null){
  session_start();
  $_SESSION['token']=$token;
  header("location:pantallaFunciones.php");
}else{
header("location:index.php");
  }
}
?>
