<?php

require "SimpleAjaxUploader/Uploader.php";

$simpleAjaxUploader = new FileUpload("inputUploadFilesSimpleAjaxUploader");

$simpleAjaxUploader->sizeLimit = ((/*byte*/ 1 * /*bytes*/ 1024) /* = kilobyte*/ * /*kilobytes*/ 1024) /* = megabyte*/ * /*megabytes*/ 10;

$result = $simpleAjaxUploader->handleUpload(dirname(__FILE__) . "/files");

if (!$result) {
	exit(json_encode(["success" => false, "msg" => $simpleAjaxUploader->getErrorMsg()]));
}

if (!unlink($simpleAjaxUploader->getSavedFile())) {
	exit(json_encode(["success" => false, "msg" => "No fue posible eliminar el archivo."]));
}

echo json_encode(["success" => true, "file" => $simpleAjaxUploader->getSavedFile()]);
