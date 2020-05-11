<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $hello = 'Hello';
        $name = 'Moritz';
        $name = 2 + 2;
        echo "$hello $name";

        $array = array('erster', 'zweiter', 'dritter');
        var_dump($array);

        var_dump($array[0]);

        $array['asd'] = 'vierter';
        var_dump($array);

        $array[] = 'fünfter';
        var_dump($array);

        ?>
    </body>
</html>