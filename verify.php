<?php
$access_token = 'O0VZtwyTcWfA2MygFanS+0vc63wobY5Z5XBiXIzCLylIieWCtl4wf1FEaFedwoEXymuue+gBUW8XilzKZ7rhf+9X0oRJ9ni6zuI92X8/L4PketsC4wAnTjfa5P9jt5DfrsA/R39ZKYRfyQibLSuFbwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
