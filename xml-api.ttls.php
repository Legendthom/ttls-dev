<?php

// Copyright © ThomKemp.nl - TTLS.nl

$api_url = 'https://ttls.nl/api?format=XML&num='.$api_limit.'&api_key='.$api_key;
$games  = simplexml_load_file($api_url);