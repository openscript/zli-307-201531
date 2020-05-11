<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auswahlelemente</title>
    </head>
    <body>
        <?php
        var_dump($_POST);
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="deutsch">Deutsch</label>
            <input type="checkbox" name="sprache[]" value="de" id="deutsch" />
            <label for="franzoesisch">Französisch</label>
            <input type="checkbox" name="sprache[]" value="fr" id="franzoesisch" />
            <label for="englisch">Englisch</label>
            <input type="checkbox" name="sprache[]" value="en" id="englisch" />
            <input type="submit" value="senden" />
        </form> 
    </body>
</html>