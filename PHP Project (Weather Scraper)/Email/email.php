<?php

echo $_POST['emailFrom']."<br/>";
echo $_POST['emailTo']."<br/>";
echo $_POST['subject']."<br/>";
echo $_POST['emailbody']."<br/>";
//$headers="From: '"$_POST['emailFrom']."' ";
$headers="From: ".$_POST['emailFrom']." ";
//$headers="From: akansha.pal@seniorworld.com";

echo $headers."</br>";

//---sending mail 
if(mail($_POST['emailTo'],$_POST['subject'],$_POST['emailbody'],$headers))
    
{ 
    echo "Main Sent Successfully";
}
 else echo "Main Could not send";

?>



