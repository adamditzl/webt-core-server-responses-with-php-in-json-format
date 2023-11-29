<?php

class Song implements JsonSerializable
{
//unique ID, name, artist, track number and duration
    private int $ID;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private float $duration;

    /**
     * @param int $ID
     * @param string $artist
     * @param int $trackNumber
     * @param float $duration
     * @param string $name
     */
    public function __construct(int $ID, string $name, string $artist, int $trackNumber, float $duration)
    {
        $this->ID = $ID;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
        $this->name = $name;
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
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @return int
     */
    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    /**
     * @return float
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    public function jsonSerialize(): mixed {
        return array(
            "Titel des Lieds: " => $this->name,
            "Interpret: " => $this->artist,
            "Dauer des Lieds: " => $this->duration
        );
    }

}