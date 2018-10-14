<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];

echo $email_address;

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email_address, "Bhuvee Client");
$email->setSubject("Enquiry");
$email->addTo("veena.bhuvee@gmail.com", "First");
$email->addContent("text/html", "Name: ".$first_name." ".$last_name."<br>Address: ".$address."<br>State: ".$state."<br>City: ".$city."<br>Pincode: ".$pincode);

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