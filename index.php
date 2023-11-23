<?php


include __DIR__. '/function.php';

$user_number=  $_GET['user_number'] ?? null;

echo psw_generate($user_number);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form action="" method="GET">
        <p>Genera password:
            <input type="number" name="user_number" >
            <input type="submit" value="INVIA">
        </p>
    </form>

</body>
</html>