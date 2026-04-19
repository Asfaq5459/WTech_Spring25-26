<?php 

$name="";
$password ="";
$validpassword = "";
$email = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $password= $_POST["password"];
        $email= $_POST["email"];

        $name = $_REQUEST["name"];
        $password= $_REQUEST["password"];
        $email= $_POST["email"];

    if(!empty($name) && strlen($name)>=5)
        {
             echo "User Name: ".$name."<br>";
        }
    else{
            echo "UserName must be greater than 5 char<br>";
        }
    if(strlen($password)>4)
        {
            $validpassword = $password;
            echo "Password: ".$validpassword."<br>";
        }
    else{   
         $validpassword = "Password Must be 4 Digit minimum<br>";               
        }
    if($email != "")
        {
         echo "Email: ".$email."<br>";
        }
    else
       {
        echo "Invalid Email format<br>";
        }
    }

?>