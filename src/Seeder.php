<?php
require_once 'GameOST.php';
require_once 'Song.php';
class Seeder
{
    public static function createMockData() :array {

        $OSTs = [];

        $OST1songs = [];

        $OST1songs[0] = new Song(1, "Apocalypse", "Jesper Kyd",1,273);
        $OST1songs[1] = new Song(2, "Secret Invasion", "Jesper Kyd",2,306);
        $OST1songs[2] = new Song(3, "Before The Storm", "Jesper Kyd",3,160);
        $OST1songs[3] = new Song(4, "47 Attacks", "Jesper Kyd",4,132);

        $OSTs[0] = new GameOST(1, "Blood Money", "Hitman", 2006, $OST1songs);

        $OST2songs = [];

        $OST2songs[0] = new Song(1, "Rules of Nature - Platnium Mix", "Jason Charles Miller",1,150);
        $OST2songs[1] = new Song(2, "The Only Thing I Know For Real - Manic Agenda Mix", "Tyson Yen",2,146);
        $OST2songs[2] = new Song(3, "A Stranger I Remain - Maniac Agenda Mix", "Free Dominguez",3,145);
        $OST2songs[3] = new Song(4, "It Has To Be This Way - Platnium Mix", "Jimmy Gnecco",4,72);

        $OSTs[1] = new GameOST(1, "Vocal Tracks Selection", "METAL GEAR RISING REVENGANCE", 2013, $OST2songs);


        $OST3songs = [];

        $OST3songs[0] = new Song(1, "Wake Up, Get Up, Get Out There", "Lyn",1,277);
        $OST3songs[1] = new Song(2, "Last Suprise", "Lyn",2,235);
        $OST3songs[2] = new Song(3, "Beneath the Mask", "Lyn",3,277);
        $OST3songs[3] = new Song(4, "Tokyo Daylight", "Lyn",4,124);

        $OSTs[2] = new GameOST(1, "Original Soundtrack", "Persona5", 2017, $OST3songs);

        return $OSTs;
    }
}