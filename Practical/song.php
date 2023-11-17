<?php

namespace Practicals;

class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter and Setter functions for Title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and Setter functions for Artist
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter and Setter functions for Genre
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter and Setter functions for Tempo
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        if (!is_int($tempo) && !is_numeric($tempo)) {
            throw new \InvalidArgumentException("Tempo must be an integer or a valid integer string.");
        }
        if (is_numeric($tempo) && strpos($tempo, '.') !== false) {
            throw new \InvalidArgumentException("Tempo cannot be a float.");
        }
        $this->tempo = (int)$tempo; // Ensure tempo is stored as an integer
    }
}

// Example usage:
$song = new Song("Stay with me", "Punch", "KPop", 72);
echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";

// Modify the title and tempo
$song->setTitle("Everytime");
$song->setTempo(120);

echo "Updated Title: " . $song->getTitle() . "\n";
echo "Updated Tempo: " . $song->getTempo() . "\n";