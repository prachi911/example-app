<?php
namespace Practicals;

class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    /**
     * Setter function for setting the title of the song
     * @param string $title The title of the song
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Getter function for retrieving the title of the song
     * @return string The title of the song
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Setter function for setting the artist of the song
     * @param string $artist The artist of the song
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Getter function for retrieving the artist of the song
     * @return string The artist of the song
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Setter function for setting the genre of the song
     * @param string $genre The genre of the song
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Getter function for retrieving the genre of the song
     * @return string The genre of the song
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Setter function for setting the tempo of the song
     * @param string $tempo The tempo of the song
     */
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }

    /**
     * Getter function for retrieving the tempo of the song
     * @return string The tempo of the song
     */
    public function getTempo() {
        return $this->tempo;
    }
}
/*
// Example usage:
$song = new Song();

$song->setTitle("Bohemian Rhapsody");
$song->setArtist("Queen");
$song->setGenre("Rock");
$song->setTempo("70 BPM");

echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";
*/
?>