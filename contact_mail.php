<?php



$toEmail = "akankshapathak@tamu.edu";
$mailHeaders = "From: " . $_POST["contact-name"] . "<". $_POST["contact-email"] .">\r\n";
$sub = "Portfolio Contact:" . $_POST["contact-phone"];
$headers = "From: ".$_POST["contact-email"] ;

if(mail($toEmail, $sub, $_POST["form-message"], $mailHeaders)) {
print "<h2 class='success'>Contact Mail Sent.</h2>";
} else {
print "<h2 class='Error'>Problem in Sending Mail.</h2>";
}
?>