<?php

    $lista = []; //vetor
    $carro = array('modelo' => 'Fox', 'marca' => 'Volkswagem', 'ano' => '2021', 'preco' => '100000');
    //encima é objeto, com as propriedades modelo, marca, ano e preço
    array_push($lista, $carro);
    $carro = array('modelo' => 'Gol', 'marca' => 'Volkswagem', 'ano' => '2019', 'preco' => '50000');
    array_push($lista, $carro);
    
    function exportaLista(){
        return $GLOBALS['lista'];
    }
?>
