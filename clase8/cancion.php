<div class="col-sm-4">
<h4> Agrega la cancion: </h4>
<form method="post"action="controladorcancion.php">
<input type="text" name="NOMBRE" placeholder="NOMBRE"class="form-control">
<input type="text" name="AUTOR" placeholder="AUTOR"class="form-control">
<input type="hidden" name="NICKNAME" value="cam">
<select name="GENERO_ID">
    <option value="1">Rock</option>
</select>
<input type="submit" value="Agregar cancion" class="btn-outline-dark">
</form>
</div>

<?php
include "conexion.php";
$sql= "select ID,NOMBRE,AUTOR,GENERO_ID from cancion where NICKNAME like 'cam'";
$resultado=$conn->query($sql);
?>
<h3>Lista de Canciones:</h3>
<table class="table table-striped">
    <?php
    if($resultado->num_rows>0){
       while($fila=$resultado-> fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["ID"]."</td>";
        echo"<td>".$fila["NOMBRE"]."</td>";
       echo"<td>".$fila["AUTOR"]."</td>";
       echo"<td>".$fila["GENERO_ID"]."</td>";
       }
       }else{
        echo"No tienes canciones aun";
    }
    ?>
</table>