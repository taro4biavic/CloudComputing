<?php
$url = "https://us-central1-deft-falcon-292410.cloudfunctions.net/hello-world” . “?” . “name=“ . $_POST[’name'];
$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

echo $output;

?>