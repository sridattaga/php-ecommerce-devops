<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$s3 = new S3Client([
    'region' => 'ap-southeast-2',
    'version' => 'latest'
]);

$file = $_FILES['file']['tmp_name'];

$s3->putObject([
    'Bucket' => S3_BUCKET,
    'Key' => basename($_FILES['file']['name']),
    'SourceFile' => $file
]);

echo "Uploaded!";
