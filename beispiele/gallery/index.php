<?php
if(isset($_POST['loeschen'])) {
    unlink($_POST['loeschen']);
}

$verzeichnis = opendir('thumbnails');
$thumbnails = [];
while(($datei = readdir($verzeichnis)) !== false) {
    $aktuelleDatei = 'thumbnails/' . $datei;
    if(is_file($aktuelleDatei)) {
        $thumbnails[] = $aktuelleDatei;
    }
}
closedir($verzeichnis);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($thumbnails as $thumbnail): ?>
    <figure>
        <img src="<?= $thumbnail ?>" alt="Some alt text" />
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <button type="submit" name="loeschen" value="<?= $thumbnail ?>">
                Löschen
            </button>
        </form>
    </figure>
    <?php endforeach; ?>
</body>
</html>