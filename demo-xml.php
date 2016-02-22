<?php
$api_limit = '10'; // Maximaal aantal in te laden resultaten
$api_key = ''; // API Key hier plaatsen

require_once('xml-api.ttls.php');

foreach($games->game as $game) {
echo $game->game_number . "<br>";
echo $game->date . "<br>";
echo $game->team1 . "<br>";
echo $game->team2 . "<br>";
echo $game->sort . "<br>";
echo $game->class . "<br>";
echo $game->stand1 . "<br>";
echo $game->stand2 . "<br>";
echo $game->A . "<br>";
echo $game->B . "<br>";
echo $game->C . "<br>";
echo $game->X . "<br>";
echo $game->Y . "<br>";
echo $game->Z . "<br>";
echo $game->last_modified . "<br>";
echo $game->w1_A . "<br>";
echo $game->w1_X . "<br>";
echo $game->w2_B . "<br>";
echo $game->w2_Y . "<br>";
echo $game->w3_C . "<br>";
echo $game->w3_Z . "<br>";
echo $game->w4_D_thuis . "<br>";
echo $game->w4_D_uit . "<br>";
echo $game->w5_B . "<br>";
echo $game->w6_A . "<br>";
echo $game->w6_Z . "<br>";
echo $game->w7_C . "<br>";
echo $game->w7_Y . "<br>";
echo $game->w8_B . "<br>";
echo $game->w8_Z . "<br>";
echo $game->w9_C . "<br>";
echo $game->w9_X . "<br>";
echo $game->w10_A . "<br>";
echo $game->w10_Y . "<br>";
echo $game->note . "<br>";
echo $game->schemetype . "<br>";
echo "<br>";
}

?>