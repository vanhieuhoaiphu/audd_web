<?php
$str=''.$_GET['id'].'';
$str=str_replace("28032001","&",$str);
$data = [
    'url' => $str,
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