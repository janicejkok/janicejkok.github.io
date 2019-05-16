<?php
$to = "janicejkok@berkeley.edu";
$subject = "Form submission";
$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
$headers = "From: $_POST["email"]";
mail($to,$subject,$message,$headers)
?>
