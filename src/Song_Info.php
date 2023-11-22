<?php
require_once "Seeder.php";
require_once "GameOST.php";
require_once "Song.php";

if(isset($_GET["song-id"]) and $_GET["song-id"] >= 0 and $_GET["song-id"] <= 3) {
    echo json_encode(Seeder::createMockData()[0]->getTracklist()[$_GET["song-id"]]);
} else {
    echo '{ "status": "Error" }';
}
