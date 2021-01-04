<?php

// if ($_GET["test"] == true && !empty($_GET['test'])){
//     include "page/{$_GET["test"]}";
// } else {
//     include "home.php";
// }

if( $_GET["test"]){
    include "page/{$_GET["test"]}";
}

if (!$_GET['test']){
    include "page/home.php";
}