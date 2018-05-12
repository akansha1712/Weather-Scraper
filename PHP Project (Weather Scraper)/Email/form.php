<?php
echo "<br><h1>Welcome to our site </h1>";
//if(sizeof($_POST['username']) && sizeof($_POST['userpwd'])){
echo "<h2>hello ".$_POST['username']." </h2>";
echo "<h3> the password you have entered ".$_POST['userpwd']."</h3>";
//}


//else if($_POST['userpwd'] && !$_POST['username'])
//    echo "You forgot to enter the username, please enter the name first";
//
//
//else if(!$_POST['userpwd'] && $_POST['username'])
//    echo "You forgot to enter the password, please enter the password first";
//else echo "Please go back and fill the details first";

?>


<form action="form.html" >
    <br><br><br>
Click this to go back to the homepage : 
  <input type="submit" value="HOMEPAGE"/>
</form>