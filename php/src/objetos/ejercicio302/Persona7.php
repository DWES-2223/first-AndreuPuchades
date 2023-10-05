<?php

namespace ejercicio301;
class Persona7
{
    private $nom;
    private $cognoms;
    private $edad;

    public function __construct($nom, $cognoms, $edad = 25){
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->edad = $edad;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom): void{
        $this->nom = $nom;
    }

    public function getCognoms(){
        return $this->cognoms;
    }

    public function setCognoms($cognoms): void{
        $this->cognoms = $cognoms;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad): void{
        $this->edad = $edad;
    }

    public function getNombreCompleto(): string{
        return $this->nom . ' ' . $this->cognoms;
    }

    public function estaJubilado(): bool{
        return $this->edad >= 65;
    }
}