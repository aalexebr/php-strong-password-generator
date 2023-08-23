<?php
    
    function pswdRndmGen ($numb){

    };
    function password_generate($chars) 
        {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($data), 0, $chars);
        }
    // echo password_generate(7);
    if(isset($_GET['length'])){
        // echo password_generate((int)$_GET['length']);
        // var_dump($_GET) ;
        // echo $_GET['length'];
        // $num = $_GET['length'];
        // echo '<br>';
        // echo $num;
        // echo '<br>';
        // echo password_generate($num);
        // echo '<br>';
        echo password_generate($_GET['length']);
    };

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
    </form>
</body>
</html>