<?php 
include "../Model/db.php";
session_start();

$name="";
$password ="";
$email = "";
$website = "";
$comment = "";
$gender = "";

$datafile ="../data.json";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"] ?? "";
    $password = $_POST["password"] ?? "";
    $email = $_POST["email"] ?? "";
    $website = $_POST["website"] ?? "";
    $comment = $_POST["comment"] ?? "";
    $gender = $_POST["gender"] ?? "";

    if(!empty($name) && strlen($name)>=5)
        echo "User Name: ".$name."<br>";
    else
        echo "UserName must be greater than 5 char<br>";

    if(strlen($password)>=4)
        echo "Password: ".$password."<br>";
    else
        echo "Password must be at least 4 characters<br>";

    if($email != "")
        echo "Email: ".$email."<br>";
    else
        echo "Invalid Email format<br>";

    if($website != "")
        echo "Website: ".$website."<br>";
    else
        echo "Website need to write<br>";

    if($comment != "")
        echo "Comment: ".$comment."<br>";
    else
        echo "Comment is empty<br>";

    if(!empty($gender))
        echo "Gender: ".$gender."<br>";
    else
        echo "Gender is required to select<br>";

    if(!empty($name) && strlen($name)>=5 && strlen($password)>=4 
        && $email != "" && $website != "" && $comment != "" && !empty($gender))
    {
        $_SESSION["name"] = $name;
        setcookie("name", $name, time()+3600, "/");
        echo "Login Successful<br>";

        $formdata = array(
            "Name"=>$name,
            "Password"=>$password,
            "Email"=>$email,
            "Website"=>$website,
            "Comment"=>$comment,
            "Gender"=>$gender
        );

        if(file_exists($datafile))
        {
            $existdata = file_get_contents($datafile);
            $tempdata = json_decode($existdata, true);
        }
        else
        {
            $tempdata = array();
        }

        if(!is_array($tempdata))
        {
            $tempdata = array(); 
        }

        $tempdata[] = $formdata;

        $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);

        if(file_put_contents($datafile,$jsondata) !== false)
        {
            echo "Data Saved in JSON<br>";
        }
        else
        {
            echo "JSON Save Failed<br>";
        }

        $database = new db();
        $connection = $database->connection();

        $result = $database->signup(
            $connection,
            "users",
            $name,
            $password,
            $email,
            $website,
            $comment,
            $gender
        );

        if($result)
        {
            echo "Data Saved in Database<br>";
        }
        else
        {
            echo "Database Insert Failed<br>";
        }
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