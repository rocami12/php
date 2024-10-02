<!Doctype html>
<html>
<head>
<title>Edad</title>
<meta charset="UTF-8"/>
<body>
<?php
$edad=8;

if ($edad>18 or $edad>80){
echo "eres mayor de edad ".$edad;
}elseif($edad<11 or $edad<=17) {
    echo "eres menor de edad ". $edad;
}
?>
</body>    

</head>


</html>