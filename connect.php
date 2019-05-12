<?php
$server="localhost";

$user="cpanelUserName";

$pass="CpanelPassWord";

$dbname="DBName";


$dsn="mysql:host=$server;dbname=$dbname";

try{

    $connect=new PDO($dsn,$user,$pass);

    $connect->exec("SET character_set_connection = 'utf8'");

    $connect->exec("SET NAMES 'UTF8'");

}
catch(PDOException $error){


    echo "unable to connect".$error->getMessage();


}
