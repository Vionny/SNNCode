<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server n Network</title>
</head>
<body>
    <p>Hellow</p>
    <?php   
        echo $_SESSION['name'];
    ?>
</body>
</html>