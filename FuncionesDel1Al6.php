<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones del 1 al 6</title>
</head>
<body>
    <?php
    //Realiza la función imprimeMayor. Recibe dos parámetros (números) e imprime por pantalla (echo) el mayor de los dos. No devuelve nada.

echo"<h3> Imprime mayor </h3>";
    //definiendo funciones

    function imprimeMayoR($n1, $n2){
        if ($n1 > $n2){
            echo $n1;
        } else{
            echo $n2;
        }

    }
        imprimeMayoR(5, 10);
        echo'<br>';
        
?>

<?php
//Realiza la función mayor. Recibe dos parámetros (números) y devuelve el mayor de los dos (no lo imprime, lo devuelve).

echo"<h2>Mayor</h2>";
function MayoR($n1, $n2){
   return $n1> $n2 ?  $n1 : $n2;

}
// echo (MayoR(4, 8)); si queremos imprimir el resultado
echo'<br>';
?>


<?php

//Realiza la función esMayor. Recibe dos parámetros, a y b. Si a>b devuelve true. En caso contrario (a<=b) devuelve false.
echo"<h2> es Mayor</h2>";
function esMayor($a, $b) {
    return $a > $b;
}

echo esMayor(26, 12) ? 'true' : 'false'; // Esto imprimirá "false"
echo'<br>';
?>

<?php

//Realiza la función cuentaCaracteres. Recibe un solo parámetro, un string. Devuelve la longitud de dicho string.
echo"<h2>cuenta caracteres </h2>";
function cuentaCaracteres ($palabra){
   return   mb_strlen($palabra);

}
 echo cuentaCaracteres('pajua');
 echo'<br>';

?>

<?php
//Realiza la función cuentaVocales. Recibe un solo parámetro, un string. Devuelve la cantidad de vocales que tiene dicho string.

echo"<h2> Ejercicio 5 función Cuenta Vocales.</h2>";
function cuentaVocales($texto){ //el parametro all ser un string tambien actua como un array
     // Define un array de vocales para guardar las vocales
     $vocales =['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
      // Inicializa el contador de vocales en 0
     $contador = 0;

      // Recorre cada carácter del string
     for($i=0 ; $i < strlen($texto); $i++){

        //// Si el carácter actual es una vocal, incrementa el contador
        if (in_array($texto[$i], $vocales)){
            $contador++;

        }
     }

     return $contador;

}

//Ejemplo de uso


echo cuentaVocales("LLevate el burro y deja la paja");
?>

<?php
echo"<h2> Aumenta o Disminuye</h2>";
//Realiza la función aumentaODisminuye. Recibe dos parámetros, un número y un boolean. Si el boolean es true, devuelve número+1. Si es false, devuelve número-1.

function  aumentaODisminuye($number, $bool){
    if($bool == true){
       return $number = $number + 1;
    } else{
        return $number = $number - 1;
        
    }

}
 
echo aumentaODisminuye(8, true);
?>



 </body>
</html>