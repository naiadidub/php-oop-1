<?php
class Movie {
    public $name;
    public $genre;
    public $regista;
    public $trama;

    function __construct($name, $genre, $regista, $trama){
        $this->name = $name;
        $this->genre = $genre;
        $this->regista = $regista;
        $this->trama = $trama;
    }
    function getName(){
        return $this->name;
    }
    function getGenre(){
        return $this->genre;
    }
    function getRegista(){
        return $this->regista;
    }
    function getTrama(){
        return $this->trama;
    }
}
