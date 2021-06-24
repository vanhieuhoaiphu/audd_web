<?php

$data = [
    'url' => 'https://audd.tech/example1.mp3',
    'return' => 'apple_music,spotify',
    'api_token' => 'test',
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL, 'https://api.audd.io/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>