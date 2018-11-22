<link rel="stylesheet" href="styles.css">

<head>
    <h1> <img src="https://image.ibb.co/kvdvoV/logo.png" width="600em" height="200em" alt="ImagenSagradaFamilia"></h1>
</head>
<form>
  <select class="comboBox" name="comboEspecialidades">
  <?php
    $especialidades = array("Cardiologo", "Pediatra", "Dermatologo", "Ostetra");
    //todas las especialidades del consultorio cargadas en la variable
    $cont = 0;
    foreach ($especialidades as $especialidad) {
    echo "<option value=\".$cont.\">".$especialidad."</option>";
    $cont ++;
    }
  ?>
</select>
<br>
<br>
  <select class="comboBox" name="comboMedicos">
  <?php
    $medicos = array("Gomez", "Santi", "Burro", "Aré","Sacá");
    // puede ser filtrado por especialidad o simplemente usar los precargados
    $cont = 0;
    foreach ($medicos as $medico) {
    echo "<option value=\".$cont.\">".$medico."</option>";
    $cont ++;
    }
  ?>
</select>
<br>
<br>
<select class="comboBox" name="comboDias">
  <?php
  $dias = array("lunes", "martes", "miercoles", "jueves","viernes");
  // puede ser filtrado por especialidad o simplemente usar los precargados
  $cont = 0;
  foreach ($dias as $dia) {
    echo "<option value=\".$cont.\">".$dia."</option>";
    $cont ++;
  }
?>
</select>
<br>
<br>
<select class="comboBox" name="comboHoras">
  <?php
  $horas = array("18:15", "15:30", "23:12", "14:12","15:23");
  // puede ser filtrado por especialidad o simplemente usar los precargados
  $cont = 0;
  foreach ($horas as $hora) {
    echo "<option value=\".$cont.\">".$hora."</option>";
    $cont ++;
  }
?>
</select>

  <h2><td><input  type="submit" class="boton_personalizado2" name="volver" value="Volver"></td><td>   </td><td><input  type="submit" class="boton_personalizado" onclick="myFunction()" name="crear" value="Crear"></td></h2>

</form>
<?php
if(isset($_REQUEST['volver'])){
  header("location:pantallaFunciones.php");
}
?>
