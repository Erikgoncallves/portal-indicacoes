<?php
// proxy.php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

$url = 'https://script.google.com/macros/s/AKfycbxCuADGuaoSvdsXhWcVI97pVypSFQ0Akujfk28RSgoebKfsGhKx7uZShwkAy9PF9EKS/exec';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents('php://input'));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
}

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
