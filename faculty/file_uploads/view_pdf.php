<?php
require_once('../../config.php');

if (isset($_GET['path']) && !empty($_GET['path'])) {
    $file_path = base_app . $_GET['path'];
    
    if (file_exists($file_path) && is_readable($file_path)) {
        header('Content-type: application/pdf');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);
        exit; // Terminate the script after sending the file to prevent unwanted output
    } else {
        http_response_code(404); // File not found
        echo 'File not found';
    }
} else {
    http_response_code(400); // Bad request
    echo 'Invalid file path';
}
?>
