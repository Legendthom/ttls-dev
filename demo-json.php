<?php

$api_limit = '10'; // Maximaal aantal in te laden resultaten
$api_key = ''; // API Key hier plaatsen

require_once('json-api.ttls.php');

foreach($result as $games) {
  echo "<a href='http://link.ttls.nl/" . $games->game->game_number . "'>" . $games->game->game_number . "</a><br />";
}

?>
