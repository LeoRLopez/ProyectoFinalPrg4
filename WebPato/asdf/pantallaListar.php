<link rel="stylesheet" href="styles.css">
<head>
    <h1> <img src="https://image.ibb.co/kvdvoV/logo.png" width="600em" height="200em" alt="ImagenSagradaFamilia"></h1>
</head>

<form>

<select class="comboBox" name="comboTurnos">
  <?php
    $turnos = array("Gomez", "Santi", "Burro", "Aré","Sacá");
    $cont = 0;
    foreach ($turnos as $especialidad) {
      echo "<option value=\".$cont.\">".$especialidad."</option>";
      $cont ++;
    }
?>
</select>

<br>
<br>
<br>
<TEXTAREA rows="5" cols="50" name="detalles" contenteditable="false"  draggable="false" readonly></TEXTAREA><BR>



<h2><input  type="submit" class="boton_personalizado2" name="volver" value="Volver"></h2>
</form>
<?php
if(isset($_REQUEST['volver'])){
  header("location:pantallaFunciones.php");
}
?>
