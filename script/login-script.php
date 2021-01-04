<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function dbConnect() {
    try { $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception  $e) {
    die('Error : ' .  $e->getMessage());
    }
    return $bdd;
}

function checkUsername(String $username) : bool
{
    $bdd = dbConnect();
    $query =  $bdd->query("SELECT * FROM user");


    while ($data = $query->fetch()){
        if($data["username"] == $username){
            return true;
        }
    }
    return false;
}

function getInfoByUsername(String $username) : array {
    $bdd = dbConnect();
    $query =  $bdd->prepare("SELECT * FROM user WHERE username = :username");
    $query->execute([
        "username" => $username
    ]);

    $data = $query->fetch();

    return $data;
}

function checkALL(String $username, String $password){
    $checkUsername = checkUsername($username);
    if($checkUsername){
        $info = getInfoByUsername($username);
        if ($password == $info["password"]){
            header("Location: /cour/exo/index.php?test=home.php");
        } else{
            header("Location: /cour/exo/index.php?test=login.php&error=2");
        }
    } else{
        header("Location: /cour/exo/index.php?test=login.php&error=1");
    }
}

checkALL($_POST["username"], $_POST["password"]);