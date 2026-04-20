<?php
include "../Controller/Registrationvalidation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Registration Log In Form</title>
    </head>

    <body>
        <form method ="post" action="">
            <table>
                <tr>
                     <td><p style = 'color: red '> * Required Field </p></td><br>
                </tr>
                <tr>
                    <td> <label for ="UserName"> User Name: </label></td>
                    <td> <input type ="text" id = "name" name = "name"> <?php echo $name ?></td>
                    <td> <p style = 'color: red'>*</p> </td>
                
                </tr>
                <tr>
                    <td> <label for ="password"> Password: </label></td>
                    <td> <input type = "password" id="pass" name ="password"><?php echo $password ?></td>
                </tr>
                <tr>
                   <td><label for="email">E-mail:</label></td>
                   <td><input type="email" id="email" name="email"><?php echo $email; ?></td>
                   <td><p style="color:red;">*</p></td>
                </tr>   
                <tr>
                    <td>Website:</td>
                    <td><input type="text" name="website"> <?php echo $website; ?></td>
                </tr>
                <tr>
                    <td>Comment:</td>
                    <td><textarea name="comment"></textarea> <?php echo $comment; ?> </td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Other">Other
                        <?php echo $gender; ?>
                    </td>
                    <td style="color:red">*</td>
                </tr>

                <tr>
                    <td><input type = "submit" id = "submit" name = "submit" value="Submit"> </td>
                </tr>
                
            </table>
        </form>
    </body>
</html>