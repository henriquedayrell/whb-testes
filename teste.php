<?php

/** 
 * Outro tipo de comentário.
 * 
 * @author Henrique <hiquedol@gmail.com>
 * @since January 08th, 2024 
 */

// $string = 'Texto 1234';
// $int = 123;
// $float = 123.12;
// $boolean = true;
// $array = [1, 2, 3];

// echo 'teste';

// $numero1 = 20;
// $numero2 = 20; 
// $soma = $numero1 + $numero2; 
// print("soma: " . $soma . PHP_EOL);
// $divisao = $numero2 / $numero1;
// print("divisao: " .$divisao . PHP_EOL);
// $multiplicacao = $numero1 * $numero2; 
// print("multiplicacao: " . $multiplicacao . PHP_EOL);
// $float1 = 10.203513;
// $float2 = 20.15325;
// $somafloat = $float1 + $float2;
// echo "float soma: " . $somafloat; 
// $multiplicacaofloat = $float1 * $float2;
// echo "multiplicacao float: " . $multiplicacaofloat;

echo "digite um numero: " . PHP_EOL; 
$variavel1 = fgets(STDIN);
echo "digite outro numero: " . PHP_EOL; 
$variavel2 = fgets(STDIN);

$soma = $variavel1 + $variavel2; 
$divisao = $variavel1 / $variavel2;
$multiplicacao = $variavel1 * $variavel2; 
echo "soma: " . $soma . PHP_EOL;
echo "multiplicacao: " . $multiplicacao . PHP_EOL;
echo "divisao: " . $divisao . PHP_EOL;

if($soma > 10){
    echo "soma maior que 10";
}else if ($soma==5){
    echo "soma igual a 5";
}

switch ($soma) {
        case 10:
        echo "numero 10";
        break;
    
    default:
        echo "numero diferente de 10";
        break;
}








