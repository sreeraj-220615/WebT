<?php
require 'env.php';

$client_id = getenv('GOOGLE_CLIENT_ID');
$client_secret = getenv('GOOGLE_CLIENT_SECRET');
$redirect_uri = getenv('REDIRECT_URI');

/* ---------- STEP 1: First Time → Redirect to Google ---------- */
if (!isset($_GET['code'])) {

    $auth_url = "https://accounts.google.com/o/oauth2/v2/auth?" .
        http_build_query([
            'client_id' => $client_id,
            'redirect_uri' => $redirect_uri,
            'response_type' => 'code',
            'scope' => 'email profile',
            'access_type' => 'online'
        ]);

    header("Location: $auth_url");
    exit();
}

/* ---------- STEP 2: After Google Login ---------- */

$code = $_GET['code'];

$token_url = "https://oauth2.googleapis.com/token";

$post_data = [
    'code' => $code,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'redirect_uri' => $redirect_uri,
    'grant_type' => 'authorization_code'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$token = json_decode($response, true);

if (!isset($token['access_token'])) {
    die("Error getting access token");
}

$access_token = $token['access_token'];

$user_info = file_get_contents(
    "https://www.googleapis.com/oauth2/v2/userinfo?access_token=" . $access_token
);

$user_data = json_decode($user_info, true);

echo "<h2>Login Successful</h2>";
echo "Name: " . $user_data['name'] . "<br>";
echo "Email: " . $user_data['email'];
