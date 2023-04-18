<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $parag = $_GET['parag'];
        $parola = $_GET['parola'];
        $parag_sost= str_replace($parola, "***", $parag);
        echo "il paragrafo che hai scritto è il seguente:<br>" . $parag;
        echo "<br>e contiene " . strlen($parag) . " caratteri.";

        echo "<br><br>il paragrafo con la parola che hai scelto censurata è il seguente:<br>" . $parag_sost;
        echo "<br>e contiene " . strlen($parag_sost) . " caratteri.";
    ?>
    
</body>
</html>