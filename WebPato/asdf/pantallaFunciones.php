<link rel="stylesheet" href="styles.css">

<head>
    <h1> <img src="https://image.ibb.co/kvdvoV/logo.png" width="600em" height="200em" alt="ImagenSagradaFamilia"></h1>
</head>

<form>
<br>
    <h2><input type="submit" class="boton_personalizado" name="crear" value="Crear Turno"></h2>
<br>
    <h2><input type="submit" class="boton_personalizado" name="listar" value="Mostrar Turnos"></h2>
<br>
<br>
    <h2><input type="submit" class="boton_personalizado2" name="volver" value="Volver"></h2>

</form>

<?php
if(isset($_REQUEST['volver'])){
  header("location:index.php");
} else if(isset($_REQUEST['crear'])){
  header("location:pantallaCrear.php");
}else if(isset($_REQUEST['listar'])){
  header("location:pantallaListar.php");
}
?>
