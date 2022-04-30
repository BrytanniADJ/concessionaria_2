<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assests/css/reset.css">
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assests/css/stilo.css">
        <script src="./assests/js/script.js" defer></script>
        <title>Cadastrar Carros</title>
    </head>
    <body>
        <header>
            <figure>
                <img src="" alt="Logo">
            </figure>
            <ul>
                <li> <a href="./">Home</a> </li>
                <li> <a href="./carros.php">Lista de carros</a> </li>
                <li> <a href="./cadastro.php">Cadastrar Carro</a> </li>
            </ul>
        </header>
        <main>
            <form action="valida.php" method="post">
                <p>
                  <label>Modelo:</label>
                  <input type="text" name="modelo" id="box_modelo">
                </p>
                <p>
                <label>Marca:</label>
                <input type="text" name="marca" id="box_marca">
                </p>
                <p>
                  <label>Ano:</label>
                  <input type="number" name="ano" id="box_ano">
                </p>
                <p>
                  <label>Preço:</label>
                  <input type="text" name="preco" id="box_preco">
                </p>
                <p>
                    <input type="submit" value="Cadastrar">
                    <input type="button" value="Cancelar" onclick="bt_cancelar()">
                </p>
            </form>
        </main>
        <footer>
        </footer>
    </body>
</html>
