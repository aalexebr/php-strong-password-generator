<?php

    function password_generate($chars) 
        {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!%&?';
        return substr(str_shuffle($data), 0, $chars);
        }
        
    // if(isset($_GET['length'])){
    //     echo password_generate($_GET['length']);
    // };

?>