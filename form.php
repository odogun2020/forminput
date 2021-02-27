
<!---- REGISTRATION GOES HERE---->
<form action="form.php" method="post">
<h1>Account Registration Here</h1>
<hr>
<table height = "200px" width = "350px">
    <tr><td>First Name:</td><td><input type="text" name="First_Name"/></td></tr>
    <tr><td>Last Name:</td><td><input type="text" name="Last_Name"/></td></tr>
    <tr><td>E-Mail:</td><td><input type="text" name="Email"/></td></tr>
    <tr><td>Username:</td><td><input type="text" name="Username"/></td></tr>
    <tr><td>Password:</td><td><input type="text" name="Password"/></td></tr>
    <tr><td><input type="submit" name="Submit"/></td></tr>
</table>

</form>
<!----PHP CODE GOES HERE------->


<?php

if(isset($_POST['Submit'])){ //check if form was submitted
  $First_Name = $_POST['First_Name']; // Get First Name
  $Last_Name = $_POST['Last_Name']; // Get Last Name
  $Email = $_POST['Email']; // Get Email
  $Username = $_POST['Username']; // Get Username
  $Password = $_POST['Password']; // Get Password



 echo "<h3> PROFILE INFORMATION</h3>";
 echo "<hr>";
  
 echo  "<b>Hi!</b>" . "   "  .  "<i>$Username</i>". "  " . "<strong>welcome to your dashboard</strong>"."!". "  Here is your Profile";
  echo "</br>"."</br>";

 echo "<b>First Name:</b>" .  $First_Name;
 echo "</br>"."</br>"; 
 echo "<b>Last Name:</b>" . $Last_Name;
 echo "</br>"."</br>"; 
 echo "<b>E-Mail:</b>" . $Email;
 echo "<br>"."</br>"; 
 echo "<b>Username:</b>" . $Username;
 
} 

 
?>

  

  




  






