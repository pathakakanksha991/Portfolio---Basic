<?php
$toEmail = "akankshapathak@tamu.edu";
$mailHeaders = "From: " . $_POST["contact-name"] . "<". $_POST["contact-email"] .">\r\n";
if(mail($toEmail, $_POST["contact-phone"], $_POST["form-message"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>