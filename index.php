<?php
require_once 'src/Seeder.php';

header("content-type: application/json");

echo json_encode(Seeder::createMockData());