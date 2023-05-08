<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

    <div style="width:90%; margin: 2em auto;">

        <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    </div>

    <div style="width:90%; margin: 2em auto;">

        <form action="<?php print(_APP_URL);?>/app/calc_kred.php" method="post">
            <label for="id_x">Kwota kredytu: </label>
            <input id="id_x" type="text" name="x" value="" /><br />

            <label for="id_y">Liczba lat spłaty: </label>
            <input id="id_y" type="text" name="y" value="" /><br />

            <label for="id_z">Oprocentowanie: </label>
            <input id="id_z" type="text" name="z" value="" /><br />

            <button class="button-large pure-button" type="submit" value="Oblicz">Oblicz</button>
        </form>

        <?php

        if (isset($messages)) {
        if (count ( $messages ) > 0) {
        echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">
            ';
            foreach ( $messages as $key => $msg ) {
            echo '
            <li>'.$msg.'</li>';
            }
            echo '
        </ol>';
        }
        }
        ?>

        <?php global $role; if ($role =='admin'){ ?>
        <div style="margin: 10px; padding: 5px; border-radius: 10px; background-color: rgb(10,200,0); width:300px;">
            <?php echo 'Zalogowano jako administrator'; ?>
        </div>
        <?php } ?>

        <?php if (isset($result)){ ?>
        <div style="margin: 10px; padding: 5px; border-radius: 10px; background-color: rgb(0,200,200); width:300px;">
            <?php echo 'Wysokość miesięcznej raty: '.$result.' zł'; ?>
        </div>
        <?php } ?>

        <?php if (isset($result) && $role =='admin'){ ?>
        <div style="margin: 10px; padding: 5px; border-radius: 10px; background-color: rgb(50,100,200); width:300px;">
            <?php echo 'Bank zarobi na tym: '.$c.' zł'; ?>
        </div>
        <?php } ?>

</body>
</html>
