<?php
$access_token = 'cFPukCUKa9CvkLUV0U3L5iYsuPSEsQGhBtgvF3h1LXUORtwTWEp+eUhukzSzly6DpijhrEtQpsYQ2wBa2VD9SYyO2Tf6qIi5BMJC1yumqK0+6StTfbDeOFTGvWKe/JMOpu7wtNihDaIM0vwV43K+oQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;