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
        
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':<>,.?/";
        $length = $_GET['length'];
        for($i = 0; $i < $length; $i++){
            $random_password .= $chars[random_int(0, $length - 1)];
        }
        echo $random_password
    ?>
</body>
</html>
