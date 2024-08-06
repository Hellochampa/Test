<?php
// Handle CORS preflight requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    exit(0);
}

// Log "hello" to the log file
$logfile = 'logs/logs.txt';
$message = "hello\n";
file_put_contents($logfile, $message, FILE_APPEND);

echo 'Data logged successfully';
?>
