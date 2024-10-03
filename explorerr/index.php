<?php
session_start();
$usuario ="";
if(isset($_SESSION[ 'usuario'])){
$usuario = $_SESSION[ 'usuario'];
}else{
    if(isset($_POST[ 'usuario'])){
        $_SESSION[ 'usuario'] = $_POST['usuario'];
        $usuario = $_POST[ 'usuario'];
    }else{
        $usuario ="camila" ;
    }
}
?> 
<form method="post" action="guardarmensaje.php">
<input type="text" value="<?php echo $usuario;?>" name="usuario">
<input type="text" value="" name="mensaje">
<button type="submit" >Enviar</button>
</form>
<table>
<?php
include "conexion.php";
$sql = "SELECT * FROM blog ORDER BY 1 DESC";
$resultado = $conn-> query($sql) ;
if ($resultado-> num_rows > 0){
while($fila = $resultado-> fetch_assoc()){
print ("<tr>");
print ("<td>".$fila['usuario']."</td><td>".$fila['mensaje']."</td>");
print("</tr>");
}
}
?>
</table>
