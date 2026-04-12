<!DOCTYPE html>
<html>
<body>

<?php
echo "<h1 style='color:red;'>Log In Form</h1>";
?>

<form method = "post" action="../Controller/loginvalidation.php">
<table>
<tr>
<td><p> User Name: </p></td>
<td><input type ="text"/></td>
</tr>
<tr>
<td><p> Password: </p></td>
<td><input type ="password"/></td>
</tr>
<tr>
<td><input type = "submit"/></td>
</tr>
</table>
</form>


</body>
</html>