<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $video1 = array("titolo" => "Patrizio Batman", "idVideo" => "87KBtb1Ayhc");
    $video2 = array("titolo" => "Piango per il puzzle?", "idVideo" => "7rLeoVCmTMY");
    $video3 = array("titolo" => "300 punti con le clinger", "idVideo" => "NOiK5Y3IPDg");

    $listaVideo = array($video1, $video2, $video3);

    function inserisciVideoYoutube($video, $larghezza, $altezza) {
        echo "<h2>" . $video["titolo"] . "</h2>";
        echo '<iframe style="width: ' . $larghezza . '%; height: ' . $altezza . 'px;" src="https://www.youtube.com/embed/' . $video["idVideo"] . '" frameborder="0" allowfullscreen></iframe>';
    }

    inserisciVideoYoutube($listaVideo[0], 50, 250);

    for ($i = 0; $i < count($listaVideo); $i++) {
        $larghezza = 50 + ($i * 25);
        $altezza = 250 + ($i * 125);
        inserisciVideoYoutube($listaVideo[$i], $larghezza, $altezza);
    }

    ?>


</body>
</html>