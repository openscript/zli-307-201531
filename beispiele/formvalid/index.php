<?

$emailValue = $_POST['email'] ?? '';
$emailError = false;
if ($emailValue !== '' && !filter_var($emailValue, FILTER_VALIDATE_EMAIL)) {
    $emailError = 'Ungültige E-Mail-Adresse';
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="email">E-Mail</label>
            <? if ($emailError): ?>
            <div class="error">
                <?= $emailError ?>
            </div>
            <? endif; ?>
            <input id="email" type="email" name="email" value="<?= $emailValue ?>" />
            <input type="submit" value="Absenden" />
        </form>
    </body>
</html>