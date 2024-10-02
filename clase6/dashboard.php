<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>LOGIN</title>
</head>
<body>
<p>
<?php
if (isset($_POST['nombre'])){
$_SESSION['nombre']=$_POST['nombre'];
echo"BIENVENIDO,:<b> ".$_POST['nombre'];
}else{
    if(isset($_SESSION['nombre'])){
        echo"Has iniciado sesion como: - " .$_SESSION['nombre'];
    }else{
        echo "Acceso Restingido";
    }
}

?></p>
<br>
<p><a href="login.php">Ir a la pagina inicial</a></p>
<br>
<p><a href="logout.php">cerrar la sesion </a></p>
</body>

</html>