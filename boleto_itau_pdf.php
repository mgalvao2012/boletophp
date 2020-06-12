<?php

$ch = curl_init('https://webtopdf.expeditedaddons.com/?api_key=' . getenv('WEBTOPDF_API_KEY') . '&content=http%3A%2F%2Fboletophp.herokuapp.com%2Fboleto_itau.php');

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
