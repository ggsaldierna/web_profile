﻿
<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = $email;
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
  

?>
