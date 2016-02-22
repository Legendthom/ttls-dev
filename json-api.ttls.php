<?php

// Copyright © ThomKemp.nl - TTLS.nl

$api_url = 'https://ttls.nl/api/?format=JSON&num='.$api_limit.'&api_key='.$api_key;

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $api_url);
$api_result = curl_exec($curl);
curl_close($curl);

$result = json_decode($api_result)->games;
