<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Funciones del 7 al 12</title>
</head>
<body>
<?php
echo"<h2> Es Par?</h2>";

function esPar($parametro){
 return ($parametro % 2 == 0 ? "true": "false"); //ternaria
    
    
}

echo esPar(7);

?>

<?php

echo"<h2>array Aleatorio</h2>";
/* Realiza la función arrayAletatorio. Recibe tres parámetros: tamaño, mínimo y máximo. Devolverá un array del tamaño indicado como primer parámetro, 
rellenado de valores aleatorios entre el mínimo y el máximo indicados. */
function arrayAleatorio($tamaño, $minimo, $maximo){
    for($i = 0; $i < $tamaño ; $i++){
        $array [$i] =  rand($minimo , $maximo); //Se inicializa un array vacío $array y luego, en un bucle for, se van generando números aleatorios entre el mínimo y máximo usando la función rand($minimo, $maximo).

    }
    return $array;
}

print_r(arrayAleatorio(10, 10, 20) ); // La función devuelve el array lleno de valores aleatorios generados.
?>

<?php
//Realiza la función arrayAletatorio. Recibe tres parámetros: tamaño, mínimo y máximo. Devolverá un array del tamaño indicado como primer parámetro, rellenado de valores aleatorios entre el mínimo y el máximo indicados.
echo"<h2>array Pares</h2>";
function arrayPares($arrayN){
    $arrayPar = []; //creamos un array vacío
    foreach($arrayN as $numeroP){
        if ($numeroP % 2 == 0){
            $arrayPar[] = $numeroP; //llenamos ese array con numeros pares
        }
    }
    return $arrayPar;
}
print_r( arrayPares([2,4,5,7,8]));

?>


<?php
echo"<h2>Digitos</h2>";
// Realiza la función digitos. Recibe como parámetro un número entero. Devuelve la cantidad de dígitos que tiene.
function digitos ($numEntero){
$numEntero = abs($numEntero); // Si el número es negativo, se usa abs($numero) para convertirlo a positivo. Esto garantiza que el signo no se cuente como un dígito.
// Convertimos el número a una cadena de texto usando (string)$numero y luego usamos strlen para contar los caracteres de esa cadena.
return strlen ((string)$numEntero) ;
}

echo digitos(73646292);
echo"<br>";
echo digitos(-292);

?>
<?php
echo"<h2>Moneda conversión Bs=> €</h2>";
//Definimos la constante con la función define
define("CAMBIO",0.021 ); //el tipo de cambio entre bs y €. En este caso, 1 bs es igual a 0.021 .

function bs_Euros($monedaBs){
  // Declaramos una constante para el tipo de cambio
 return $monedaBs * CAMBIO;

}

function euros_Bs($monedaEuros){
    // Declaramos una constante para el tipo de cambio
   return $monedaEuros/CAMBIO;
  
  }

echo bs_Euros(100); // Convierte 100 coronas danesas a euros
echo "</br>";
echo euros_Bs(10);  // Convierte 10 euros a coronas danesas


?>

<?php
echo"<h2>Modifica</h2>";
/* El primer parámetro &$numero se pasa por referencia. Esto significa que cualquier cambio en esta variable dentro de la función 
modifica afectará el valor de $miNumero fuera de la función. */
function modifica(&$numero, $cantidad){
    /* El segundo parámetro $cantidad se pasa por valor, lo cual significa que la función recibe una copia del valor, y cualquier cambio en esta variable
   dentro de la función no afecta a la variable original fuera de ella. */
    $numero = $numero + $cantidad;
  
}

//Ejemplo de uso
$minumero = 10;
modifica($minumero, 6);
echo $minumero;

/* Comentario ¿Se modifica el valor de la variable que se pasa como primer parámetro?
Sí, el valor de la variable pasada como primer parámetro (en este caso, $miNumero) se modifica. Esto ocurre porque el parámetro se pasa por referencia,
lo que permite que cualquier cambio dentro de la función afecte directamente al valor original fuera de ella.
 */
?>
</body>
</html>