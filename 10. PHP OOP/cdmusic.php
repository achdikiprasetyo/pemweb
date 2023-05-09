<?php
require_once 'product.php';

class cdmusic extends product{
    private $artist;
    private $genre;

    public function __construct($name,$price,$discount,$artist,$genre){
        parent::__construct($name,$price,$discount);
        $this->artist = $artist;
        $this->genre = $genre;

        $this->price *= 1.1;
        $this->discount += 0.05;
    }

    public function getArtist(){
        return $this->artist;
    }

    public function setArtist($artist){
        $this->artist = $artist;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }
}
?>