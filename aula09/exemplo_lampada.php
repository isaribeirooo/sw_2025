<?php
    include_once 'lampada.class.php';

    $lamp1 = new lampada();

    //var_dump($lamp1);

    $lamp1->fabricante = "philips";
    $lamp1->tensao = 110;
    $lamp1->potencia = 50;
    $lamp1->cor = "branca";
     
    $lamp1->MostrarDados();

    $lamp1->ligar();
    $lamp1->MostrarDados();
?>