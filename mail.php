<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $email_address = $_POST['email'];
// $address = $_POST['address'];
// $state = $_POST['state'];
// $city = $_POST['city'];
// $pincode = $_POST['pincode'];

// echo $first_name;
// echo $last_name;
// echo $email_address;
// echo $address;
// echo $state;
// echo $city;
// echo $pincode;

$email = new \SendGrid\Mail\Mail(); 
// $email->setSmtpapiTos(["satyam123.sr@gmail.com"]);
// $email->setFrom($email_address, "Bhuvee Client");
$email->setFrom("satyam123.sr@gmail.com", "Bhuvee Client");
$email->setSubject("Enquiry");
// $email->addTo("satyam123.sr@gmail.com", $first_name);
$email->addTo("satyam123.sr@gmail.com", "First");
$email->addContent("text/html", "this is a test mail");
// $email->addContent("text/html", "Item: ".$item."\n\r".$message."\n\rPhone No: ".$phone_no);
// $email->addContent("text/html", "Name: ".$first_name." ".$last_name."<br>Address: ".$address."<br>State: ".$state."<br>City: ".$city."<br>Pincode: ".$pincode);

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