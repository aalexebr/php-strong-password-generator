<?php
    session_start();
    require_once __DIR__.'/php_logic.php';
    
    if(isset($_GET['length'])){
        $generatedPsswd = password_generate($_GET['length']);
        echo $generatedPsswd;
        echo '<br>';
         $_SESSION['password'] = $generatedPsswd;
        echo $_SESSION['password'];
        header('Location: ./redirect.php');
    };
   
    // function password_generate($chars) 
    //     {
    //     $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!%&?';
    //     return substr(str_shuffle($data), 0, $chars);
    //     }

    // if(isset($_GET['length'])){
    //     echo password_generate($_GET['length']);
    // };
    // $letters = 'asd';
    // $x ='bnm';
    // $y = $letters.$x;
    // echo '<br>';
    // echo $y;
    // echo '<br>';
    // var_dump($y)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <form action="" method="GET">
        <div>
            <label for="length">insert pswd length</label>
            <input type="number" name="length" min="1" max="8" step="1" 
            value="<?php if(isset($_GET['length'])){echo $_GET['length'];}?>">
        </div>
        <button type="submit">
            submit
        </button>
        <?php
            if(isset($_GET['length'])){
        ?>
            <h1>
                <?php 
                    echo $generatedPsswd;
                ?>
            </h1>
        <?php   
        }?>
    </form>
    <a href="./redirect.php">redirect</a>
</body>
</html>