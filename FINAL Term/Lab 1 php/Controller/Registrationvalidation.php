<?php 

$name="";
$password ="";
$validpassword = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $password= $_POST["password"];

        $name = $_REQUEST["name"];
        $password= $_REQUEST["password"];

    }
?>