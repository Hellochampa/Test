<?php
// Handle CORS preflight requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    header("Access-Control-Allow-Credentials: true");
    // Respond with 200 OK to indicate preflight check is successful
    http_response_code(200);
    exit();
}

// Allow from any origin for actual requests
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

// Log "hello" to the log file
$logfile = 'logs/logs.txt';
$message = "hello\n";
file_put_contents($logfile, $message, FILE_APPEND);

// Handle POST requests
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = file_get_contents('php://input');
    file_put_contents($logfile, $data . PHP_EOL, FILE_APPEND);
    echo 'Data logged successfully';
} else {
    echo 'Invalid request';
}
?>

