<?php 

$peso = filter_input(INPUT_POST, 'peso');
$altura = filter_input(INPUT_POST, 'altura');

if ($peso && $altura) {

    $imc = $altura * $altura;

    $calculo = $peso / $imc;

    $calculo = substr($calculo, 0, 5);
    echo '<h2>'.'IMC => '.$calculo.'</h2>';


} else {
    header('Location: index.php');
    exit;
}


?>