<?php
if(isset($_POST)){
$NOMBRE=$_POST['NOMBRE'];
$AUTOR=$_POST['AUTOR'];
$NICKNAME=$_POST['NICKNAME'];
$GENERO_ID=$_POST['GENERO_ID'];
}
?>

<?php
include"conexion.php";
$sql_insertar= "insert into cancion values(default,'$NOMBRE','$AUTOR','$NICKNAME',$GENERO_ID)";
$conn->query($sql_insertar);
header("Location: cancion.php");
exit;
?>