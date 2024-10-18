<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riepilogo</title>
</head>
<body>
    <?php
    
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $mail = $_GET["mail"];

        echo "
            <h1>Dati Inviati</h1>
            <table style='border:1px solid black';>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Mail</th>
                </tr>
                <tr>
                    <td>$nome</td>
                    <td>$cognome</td>
                    <td>$mail</td>
                </tr>
        </table>"
    ?>
</body>
</html>