<?php
require('Uploader.php');

$upload_dir = '/fakepath/';
$valid_extensions = array('gif', 'png', 'jpeg', 'jpg', 'xml', 'mp3');

$Upload = new FileUpload('uploadfile');
$result = $Upload->handleUpload($upload_dir, $valid_extensions);

if (!$result) {
    echo json_encode(array('success' => false, 'msg' => $Upload->getErrorMsg()));   
} else {
    echo json_encode(array('success' => true, 'file' => $Upload->getFileName()));
}
