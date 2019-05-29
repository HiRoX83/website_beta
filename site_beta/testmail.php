<?php
$to      = "abderrahimelbahiri@gmail.com" ;
$subject = "the subject" ;
$message = "hello ups it's work" ;
$headers = "From: abdouinnouva@gmail.com" ;  

if(mail ($to, $subject, $message, $headers)){
 echo " Mail send Successuly" ;
} else {
echo "can not send your Mail" ;
} 

?> 
