<?php
// Handle CORS preflight requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // Allow from any origin
    header("Access-Control-Allow-Origin: *");
    // Allow specific methods
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    // Allow specific headers
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    // Allow credentials
    header("Access-Control-Allow-Credentials: true");
    exit(0);
}

// Allow from any origin for actual requests
header("Access-Control-Allow-Origin: *");
// Allow credentials
header("Access-Control-Allow-Credentials: true");
// Allow specific methods
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

// Log "hello" to the log file
$logfile = 'logs.txt';
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
