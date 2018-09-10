<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
$full_name = $_POST['full-name'];
$email_address = $_POST['email'];
$phone_no = $_POST['phone-no'];
$message = $_POST['message'];

$email = new \SendGrid\Mail\Mail(); 
// $email->setSmtpapiTos(["satyam123.sr@gmail.com"]);
$email->setFrom($email_address, "Bhuvee Client");
$email->setSubject("Enquiry");
$email->addTo("satyam123.sr@gmail.com", $full_name);
$email->addContent("text/html", $message."\n\rPhone No: ".$phone_no);

$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    echo "success";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>