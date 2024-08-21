<?php

//Variables para las operaciones.
$num1 = 2;
$num2 = 0;

//Operador de las variables.
$operador = '/';

switch ($operador) {
    case '+':
        $respuesta = $num1 + $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;
    case '-':
        $respuesta = $num1 - $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;
    case '*':
        $respuesta = $num1 * $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;
    case '/':
        if ($num2 == 0) {
            echo "No se puede dividir entre 0.";
        } else {
            $respuesta = $num1 / $num2;
            echo "La respuesta de la operación es: " . $respuesta;
            break;
        }
        break;
    default:
        echo $respuesta = "No existe esa condición.";
        break;
}

?>