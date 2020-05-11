<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_GET['daten'];
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='GET'>
        <textarea name="daten"></textarea>
        <input type="submit" value="Absenden" />
    </form>
</body>
</html>