<?php 

session_start();

$name="";
$password ="";
$email = "";
$website = "";
$comment = "";
$gender = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"] ?? "";
    $password = $_POST["password"] ?? "";
    $email = $_POST["email"] ?? "";
    $website = $_POST["website"] ?? "";
    $comment = $_POST["comment"] ?? "";
    $gender = $_POST["gender"] ?? "";

     if(!empty($name) && strlen($name)>=5)
    {
        echo "User Name: ".$name."<br>";
    }
    else
    {
        echo "UserName must be greater than 5 char<br>";
    }

    if(strlen($password)>=4)
    {
        $validpassword = $password;
        echo "Password: ".$validpassword."<br>";
    }
    else
    {   
        echo "Password must be at least 4 characters<br>";               
    }

    if($email != "")
    {
        echo "Email: ".$email."<br>";
    }
    else
    {
        echo "Invalid Email format<br>";
    }
        if($website != "")
    {
        echo "Website: ".$website."<br>";
    }
    else
    {
        echo "Website need to write<br>";
    }

    if($comment != "")
    {
        echo "Comment: ".$comment."<br>";
    }
    else
    {
        echo "Comment is empty<br>";
    }

    if(!empty($gender))
    {
        echo "Gender: ".$gender."<br>";
    }
    else
    {
        echo "Gender is required to select<br>";
    }
    
if(!empty($name) && strlen($name)>=5 && strlen($password)>=4 
        && $email != "" && $website != "" && $comment != "" && !empty($gender))
    {
        $_SESSION["name"] = $name;
        setcookie("name", $name, time()+3600, "/");
        echo "Login Successful<br>";
    }
    else
    {
        echo "Please fill all fields correctly!<br>";
    }
}

if(isset($_SESSION["name"]))
{
    echo "Welcome ".$_SESSION["name"];
}
elseif(isset($_COOKIE["name"]))
{
    echo "Welcome ".$_COOKIE["name"];
}
else
{
    echo "Please log in again!";
}

?>