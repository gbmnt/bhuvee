<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$key = 'AKIAJXNN4ZP3CFJOXAJA';
$secret = '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';

$credentials = new Aws\Credentials\Credentials($key, $secret);

$s3 = new Aws\S3\S3Client([
    'region'  => 'ap-south-1',
    'version' => 'latest',
    'credentials' => $credentials
]);


// Send a PutObject request and get the result object.
// $result = $s3->putObject([
//     'Bucket' => 'bhuvee-pic',
//     'Key'    => 'abc/img.jpg',
//     'SourceFile'   => 'img/bk1.jpeg'
// ]);



$target_file = basename($_FILES["my_file"]["name"]);
// echo $target_file;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["my_file"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $result = $s3->putObject([
          'Bucket' => 'bhuvee-pic',
          'Metadata' => [
   "ContentType" => $_FILES['my_file']['type'], 
          ],

          // '"ContentType"' => $_FILES['my_file']['type'],
          'MetadataDirective' => 'REPLACE',
          'Key'    => $_POST['id'].'/'.$_FILES['my_file']['name'],
          'SourceFile'   => $_FILES['my_file']['tmp_name']
        ]);
        echo $result['ObjectURL'];
    } else {
        echo "File is not an image.";
    }
}
?>