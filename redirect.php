<?php
    // require_once __DIR__.'/php_logic.php';
    session_start();
    var_dump($_SESSION);
    // session_unset();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>
</head>
<body>
        <h1>
            <?php 
                echo $_SESSION['password'];
            ?>
        </h1>
</body>
</html>
