<?php
    include './mysql.php';
    //var_dump($_POST);
    if(isset($_POST) && isset($_POST['modelo']) && isset($_POST['marca'])
        && isset($_POST['ano']) && isset($_POST['preco'])){
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $ano = (INT) $_POST['ano'];
        $preco = (FLOAT) $_POST['preco'];
        $resposta = cadastraCarro($modelo, $marca, $ano, $preco);
        if($resposta === NULL || $resposta === false){
            header('Location: ../cadastro.php?erro=1');
        }else{
            header('Location: ../carros.php?erro=1');
        }

    }else{
        header('Location: ../cadastro.php?erro=1');
    }
?>
