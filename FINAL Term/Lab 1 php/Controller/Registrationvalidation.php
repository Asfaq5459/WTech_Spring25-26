<?php 

$name="";
$password ="";
$validpassword = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $password= $_POST["password"];
        $email= $_POST["email"];
        $website = $_POST["website"];
        $comment = $_POST["comment"];
        $gender = $_POST["gender"];

        $name = $_REQUEST["name"];
        $password= $_REQUEST["password"];
        $email= $_REQUEST["email"];
        $website = $_REQUEST["website"];
        $comment = $_REQUEST["comment"];
        $gender = $_REQUEST["gender"];

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
    }

?>