<!doctype html>
<html>
<head>
<title> calculadora </title>
</head>
<body>
<Form action="operar.php" method="post">
<input type="number" name=numl>
<input type="number" name =num2 >
<select name= "operacion">
<option value="s" >sunar</option>
<option value="r" >restar</option>
<option value="m" >multiplicar</option>
<option value="d">dividir</option>
</select>
<button type="submit">=</button>
</Form>

<h3>
<?php
if(!empty($_GET['m'])){
$resul= $_GET['m'];
}else{
echo $resul=0;
}
echo $resul;
?>

</h3>
</body>
</html>