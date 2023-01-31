<?php 
    function randomPassword(){
        $length = $_GET['length'];
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':<>,.?/";
        for($i = 0; $i < $length; $i++){
            $random_password .= $chars[random_int(0, $length - 1)];
        }
        return $random_password;
    }
?>