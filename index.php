<?php 
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <input type="value" name="length" id="length" placeholder="Inserisci la lunghezza della tua password">
        <button type="submit">submit</button>
    </form>
    <?php 
        include __DIR__ . '/function.php';
        echo randomPassword();
    ?>
</body>
</html>
