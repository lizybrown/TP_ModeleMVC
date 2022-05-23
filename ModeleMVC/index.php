<?php
define("URL", str_replace("index.php", "",(isset($_SERVER['HTTPS']) ? " https" : "http") ."://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

$url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);


if (empty($_GET['page'])){
    require 'views/accueilView.php';
   {
        switch($_GET['page']){
            case "livres":
                require "view/livresView.php";
                break;
            case "accueil" :
                require "views/accueilView.php";    
        }
    }
}

var_dump ($url);


?>
