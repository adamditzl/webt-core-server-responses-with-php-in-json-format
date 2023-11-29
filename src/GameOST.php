<?php

class GameOST implements JsonSerializable {
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

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVideogamename(): string
    {
        return $this->videogamename;
    }

    /**
     * @return string
     */
    public function getReleaseyear(): string
    {
        return $this->releaseyear;
    }

    /**
     * @return array
     */
    public function getTracklist(): array
    {
        return $this->tracklist;
    }

    public function jsonSerialize(): mixed
    {
        return array(
            "Titel des Albums: "     => $this->name,
            "Name des Videospiels: "  => $this->videogamename,
            "Veröffentlichungsjahr: " => $this->releaseyear,
            "Im Album enthaltene Lieder: "     => $this->tracklist
        );
    }
}