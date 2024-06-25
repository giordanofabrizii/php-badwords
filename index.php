<?php
    $string = 'Ho sceso, dandoti il braccio, almeno un milione di scale<br>
            e ora che non ci sei è il vuoto ad ogni gradino.<br>
            Anche così è stato breve il nostro lungo viaggio.<br>
            Il mio dura tuttora, né più mi occorrono<br>
            le coincidenze, le prenotazioni,<br>
            le trappole, gli scorni di chi crede<br>
            che la realtà sia quella che si vede.<br>

            Ho sceso milioni di scale dandoti il braccio<br>
            non già perché con quattr\'occhi forse si vede di più.<br>
            Con te le ho scese perché sapevo che di noi due<br>
            le sole vere pupille, sebbene tanto offuscate,<br>
            erano le tue. ';
    $badword = $_GET["badword"];
    $censored = str_ireplace("$badword", "***", $string);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <main>
            <h1>La frase da censurare era: </h1>
            <p><?php echo $string ?></p>

            <form action="./index.php" method="GET">
                <input type="text" name="badword" id="badword">
                <button type="submit">
                    Censura
                </button>
            </form>

            <h2>Ed &egrave; diventata:</h2>
            <p>
                <?php echo $censored ?> 
            </p>

    </main>
</body>
</html>