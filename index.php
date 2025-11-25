<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos na Black Friday</title>
</head>
<body>
    <header>
        Black Friday Jogos
    </header>

    <h1>Insira os dados de um jogo que está em promoção:</h1>
        <form action="processamento.php" method="post">

            <input type="text" name="Nome" placeholder="Nome" required>

            <input type="text" name="PrecoNormal" placeholder="Preço sem promoção" required>

            <input type="text" name="PrecoProm" placeholder="Preço promocional" required>

            <button type="submit">Enviar</button>
        
        </form>

    <h2>Jogos já cadastrados: </h2>

    <?php
        require_once "funcoesBD.php";
        $con = conectarBD();

        $result = mysqli_query($con, "SELECT * FROM bfjogos");

        while ($linha = mysqli_fetch_assoc($result)) {
            echo "<p>{$linha['Nome']} - De {$linha['PrecoNormal']} por {$linha['PrecoProm']}</p>";
        }

        mysqli_close($con);
    ?>
        

    <footer>Todos os direitos reservados</p></footer>
</body>
</html>