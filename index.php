<?php

if ($_GET["test"] == true){
    include "page/{$_GET["test"]}";
} else{
    include "home.php";
}