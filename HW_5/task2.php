<?php

$url = 'www.healthlab.com.ua';

$ch = curl_init();

curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec ($ch);

curl_close($ch);

echo "<plaintext>" . $result . "</plaintext>";

exit();