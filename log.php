<?php
// Allow from any origin
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, Sec-Fetch-Dest, Sec-Fetch-Mode, Sec-Fetch-Site");

// Handle CORS preflight requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // Respond with 200 OK to indicate preflight check is successful
    http_response_code(200);
    exit();
}

// Log "hello" to the log file for GET requests
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $logfile = 'logs/logs.txt';
    $message = "hello\n";
    file_put_contents($logfile, $message, FILE_APPEND);
    echo 'GET request logged successfully';
    exit();
}

// Handle POST requests
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = file_get_contents('php://input');
    $logfile = 'logs/logs.txt';
    file_put_contents($logfile, $data . PHP_EOL, FILE_APPEND);
    echo 'Data logged successfully';
    exit();
}

echo 'Invalid request';
?>


echo 'Invalid request';
?>

