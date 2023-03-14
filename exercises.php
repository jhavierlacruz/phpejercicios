<?php
// En lugar de solo imprimir un mensaje en pantalla, pedirás al usuario que digite un nombre y mostrarás en pantalla lo siguiente: Hola, [nombre]

/*
$name = readline("ingrese su nombre: ");

echo "Hola, $name";
*/

// Instrucciones: Ahora que sabemos incluir nombres, podemos agregar más datos. Intentemos con un apellido para tener algo así: ``Hola, [nombre] [apellido]```

/*

$name = readline("ingrese su nombre: ");
$surname = readline("ingrese su apellido: ");

echo "Hola, $name $surname";

*/

// Instrucciones: seguro has visto que en Platzi hay más de 600 cursos ¿puedes mostrar a que categorías corresponden en una sola línea de código?

/*
$cat = 600;

for ($i=0; $i <= $cat; $i++) { 
   echo "Categoria" . $i."\n";
}
*/

//Instrucciones: otro clásico conocido, donde pedirás al usuario que ingrese 2 números y muestre en pantalla el resultado. Si quieres añadir más dificultad puedes utilizar números con punto decimal y especificar el número de decimales después del punto.

/*

$a = (float) readline("ingrese su primer numero ");
$b =  (float) readline("ingrese su segundo numero ");

function result($a,$b)
{
    $sum = $a+$b;
    return $sum;
}

echo "Su suma sera " . result($a,$b);

*/


// Instrucciones: añadiendo un extra al reto anterior ahora el usuario ingresará 3 números, sumarás los 2 primeros y el resultado será multiplicado por el tercero. Añade las consideraciones del punto decimal del reto anterior.

/*

$a = (float) readline("ingrese su primer numero ");
$b =  (float) readline("ingrese su segundo numero ");
$c =  (float) readline("ingrese su Tercer numero ");

function result($a,$b,$c)
{
    $total = ($a+$b) * $c;
    return $total;
}

echo "Su resultadosera " . result($a,$b,$c);

*/

// Instrucciones: llegaste a una fiesta con X cantidad de rebanadas de pizza (indicadas por el usuario), después de un rato se consumió Y cantidad de rebanadas y quedan Z. Fácil ¿cierto?
// El reto está en que expreses lo que sucede es una forma comprensible para cualquier persona, imprescindible pensar en tus usuarios 😉


$hay = (int) readline("¿Con cuantas rebanadas llegaste? ");
$numconsumi = (int) readline("¿Cuantas rebanadas consumiste? ");

function rebanadasQuedan($a,$b)
{
    $quedan = $a - $b;
    echo "Quedan ". $quedan." Rebanadas disponibles \n";

    if ($quedan >= 1) {

    $numconsumin=readline("cuanto consumiste ahora ");
    $quedan -= $numconsumin;
    echo "Quedan ". $quedan . " Rebanadas disponibles \n";

    while  ($quedan >= 1) {
        $numconsumin=readline("cuanto consumiste ahora ");
        $quedan -= $numconsumin;
        echo "Quedan ". $quedan . " Rebanadas disponibles \n";
    }
}
}

echo rebanadasQuedan($hay,$numconsumi);

/*
function consumir($a,$b)
{
    $quedan = $a - $b;
    return $quedan;
}

echo "Quedan ". consumir($hay,$numconsumi)." Rebanadas disponibles \n";

if (consumir($hay,$numconsumi) >= 1) {

    $quedan = consumir($hay,$numconsumi);
    $numconsumin=readline("cuanto consumiste ahora ");
    $quedan -= $numconsumin;
    echo "Quedan ". $quedan . " Rebanadas disponibles \n";

    while  ($quedan >= 1) {
        $numconsumin=readline("cuanto consumiste ahora ");
        $quedan -= $numconsumin;
        echo "Quedan ". $quedan . " Rebanadas disponibles \n";
    }
}
*/

