<?php
require_once "Seeder.php";
require_once "GameOST.php";
require_once "Song.php";

if(isset($_GET["song-id"]) and $_GET["song-id"] >= 0 and $_GET["song-id"] <= 3) {
    if(isset($_GET["ost-id"]) and $_GET["ost-id"] >= 0 and $_GET["ost-id"] <= 2) {
    echo json_encode(Seeder::createMockData()[$_GET["ost-id"]]->getTracklist()[$_GET["song-id"]]);
    } else{
        echo "Es ist eine falsche OST-ID angegeben";
    }
} else {
    echo "Es ist eine falsche Song-ID angegeben"; }
