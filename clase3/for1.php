<!doctype html>
<html>
<head>
<title>tabla</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
for($x=1; $x<=10; $x++){
echo "9 X $x = " . ( 9 * $x) ."<br>";

   for($y=1; $y<=10; $y++){
    echo "$x X $y = " . ( $x * $y) ."<br>";
   }
 echo "<br>";
}

?>
</body>
</html>