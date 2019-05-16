<?php
$to = "janicejkok@berkeley.edu";
$subject = "Github website message";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .;

mail($to,$subject,$txt,$headers);
?>
