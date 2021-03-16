<?php 

$peso = filter_input(INPUT_POST, 'peso');
$altura = filter_input(INPUT_POST, 'altura');

if ($peso && $altura) {

    $imc = $altura * $altura;

    $calculo = $peso / $imc;

    echo '<h2>'.'IMC -> '.$calculo.'</h2>';
    echo '<br/>';
    echo '<h2>'.'Considere os primeiros 4 números.'.'</h2>';

} else {
    header('Location: index.php');
    exit;
}


?>