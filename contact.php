<?php
/* send the submitted data */
$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];
if (($name=="")||($email=="")||($message==""))
{
  echo "All fields are required, please fill <a href=\"\">the form</a> again.";
}
else{
    $headers = "From: $name<$email>\r\nReturn-path: $email";		
    $subject="DR1PRO";
    mail("indrewjones@gmail.com", $subject, $message, $headers);
    echo "Email sent!";
}

?>
