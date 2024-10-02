
<?php
header("Content-Type: application/json");

$peso = filter_input(INPUT_GET, 'peso', FILTER_VALIDATE_FLOAT);
$estatura = filter_input(INPUT_GET, 'estatura', FILTER_VALIDATE_FLOAT);

if ($peso !== false && $estatura !== false && $peso > 0 && $estatura > 0) {
    $estatura = $estatura / 100; // Convert height to meters
    $imc = $peso / ($estatura * $estatura);
    $imc = round($imc, 2);
    respuesta(200, "Tu IMC es de $imc", $imc);
} else {
    respuesta(400, "Datos no válidos", null);
}

function respuesta($estado, $mensaje_estado, $datos) {
    header("HTTP/1.1 $estado $mensaje_estado");
    $respuesta = [
        'estado' => $estado,
        'mensaje_estado' => $mensaje_estado,
        'datos' => $datos
    ];
    echo json_encode($respuesta);
}
?>
