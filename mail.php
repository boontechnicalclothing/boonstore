<?php

$to = "calingasanjustin@gmail.com";
$header = "From: {$to}";
$subject = "testing if php mail works";
$body = "Hi,\n\nthis is a test message";
if (mail($to, $subject, $body, $header)) {
echo("<p>Message successfully sent!</p>");
} else {
echo("<p>Message delivery failed...</p>");
}

