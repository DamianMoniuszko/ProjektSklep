<?php

class SystemClass {
    static function printHead($stylesPath) {
        echo "
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
            <link rel='stylesheet' href='$stylesPath'>
        </head>
        ";
    }

    static function dbConnect(){
        require_once "config.php";
        return new mysqli($host, $db_user, $db_password, $db_name);
    }

    public function blockEntrace(){
        if(isset($_SESSION["signedIn"])==false){
            header("location: index.php");
        }
        else{
            header("location: shop.php");
        }
    }
}
?>
