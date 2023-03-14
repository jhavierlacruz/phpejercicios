<?php
// <!-- Instrucciones: pide al usuario que indique su nombre y su edad. Como mensaje de salida le indicarás que edad tuvo el año pasado y cuantos años tendrá el siguiente año.
// Ejemplo: [nombre] el año pasado tenías X años y el próximo año cumplirás Y años. -->

/*

$name = readline("ingrese su nombre ");
$age = (int)readline("Introduzca su edad ");

function yearBack($age)
{
    $dateBefore = $age - 1;
    $dateAfter = $age + 1;
    $result = "el año pasado tenias $dateBefore y el proximo año cumpliras  $dateAfter años \n";
    return $result;
}

echo "$name ". yearBack($age);

*/

// Instrucciones: vas con tus amigos a tu restaurante favorito y acuerdan dividir la cuenta. Para facilitar las cosa pedirás al usuario que indique el total a pagar, entre cuantas personas se dvidirá la cuenta, porcentaje de propina a incluir, un porcentaje de impuestos, total a pagar incluyendo propina más impuestos y el total a pagar por cada persona.

/*
$total_cuenta =(int)readline("Indique el total a pagar: ");
$people=(int)readline("Indique la cantidad de Personas que van pagar ");
$tips =(int)readline("Indique el porcentaje de propina a incluir ");
$tax =(int)readline("Indique el porcentaje de impuesto a incluir ");;


function totalCuenta($total_cuenta, $people, $tips, $tax)
{
    $tips = ($total_cuenta * $tips)/100;
    $tax = ($total_cuenta * $tax)/100;
    $people = $people;
    $total_global = $tips + $tax + $total_cuenta;
    $total_person = $total_global / $people;
    $total = "El Total a pagar por toda la cuenta corresponde a ". $total_global . " El total a pagar por cada persona corresponde a: $total_person";
    return $total; 

}

echo totalCuenta($total_cuenta, $people, $tips, $tax);
*/

// Instrucciones: escribe un programa al que le indiques una cantidad de días y como resultado deberá mostrar cuantas horas, minutos y segundos hay en dicha cantidad de días.

/*
$ndays = readline("Indique la cantidad de dias ");

function timing($ndays)
{
    $day = $ndays;
    $hour = 24 * $ndays;
    $min = 1440 * $ndays;
    $seg = 86400 * $ndays;

    $result = "En $day día, hay $hour horas o $min minutos o $seg Segundos";
    return $result;
}

echo timing($ndays);

*/

// Instrucciones: hay 1.609344 km en una milla (mi). Escribe un programa en el que el usuario indique una cantidad de millas y muestre en pantalla el resultado convertido a kilómetros.

/*

$calcular_m=readline("Indique la cantidad de Millas ");

function millas($calcular_m)
{
    $millas = 1.609344;
    $calculo = $calcular_m * $millas;
    $total = "Su conversion de $calcular_m , equivale a $calculo en KM \n";
    return $total;
}

echo millas($calcular_m);

*/

// Instrucciones: pide al usuario ingresar un número mayor a 1000 y otro menor a 100. Indica de una forma sencilla de entender al usuario cuantas veces cabe el número menor a 100 en el número mayor a 1000


$nmayor = readline("Ingrese un numero mayor a 1000 ");

while ($nmayor < 1000) {
    $nmayor = readline("Ingrese un numero mayor a 1000 ");
} 

$nmenor = readline("Ingrese un numero menor a 100 ");

while ($nmenor > 100) {
    $nmenor = readline("Ingrese un numero menor a 100 ");
} 

function Divisible($nmayor,$nmenor)
{
    $cantidad = $nmayor / $nmenor;
    return $cantidad; 
}

echo "La catidada de veces que cabe el numero " . Divisible($nmayor,$nmenor)."\n";

