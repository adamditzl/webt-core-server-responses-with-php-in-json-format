<?php
require_once "Seeder.php";
require_once "GameOST.php";
require_once "Song.php";

if(isset($_GET["ost-id"]) and $_GET["ost-id"] >= 0 and $_GET["ost-id"] <= 2) {
    echo json_encode(Seeder::createMockData()[$_GET["ost-id"]]);
} else {
    echo json_encode(Seeder::createMockData());
}
