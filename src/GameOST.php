<?php
class GameOST {
private int $ID;
private string $name;
private string $videogamename;
private string $releaseyear;
private array $tracklist;

    /**
     * @param int $ID
     * @param string $name
     * @param string $videogamename
     * @param string $releaseyear
     * @param array $tracklist
     */
    public function __construct(int $ID, string $name, string $videogamename, string $releaseyear, array $tracklist)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->videogamename = $videogamename;
        $this->releaseyear = $releaseyear;
        $this->tracklist = $tracklist;
    }


}