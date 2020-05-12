<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $test = array('1', '2');
    $test['beispiel'] = '3';
    var_dump(array_keys($test));

    $test2 = ['1', '2', '3', '4'];
    var_dump($test2);

    foreach ($test2 as $key => $value) {
        echo $value;
    }
    echo '<br />';
    echo implode(',', $test2);
    var_dump(explode(',', 'abc,cdf,asd'));
    ?>
</body>
</html>