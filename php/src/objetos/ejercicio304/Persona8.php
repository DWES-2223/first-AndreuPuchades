<?php
class Persona8 {
    private $nombre;
    private $apellidos;
    private $edad;

    const LIMITE_EDAD = 66;

    public function __construct(string $nombre, string $apellidos, int $edad = self::LIMITE_EDAD) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad(int $edad) {
        $this->edad = $edad;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function estaJubilado(): bool {
        return $this->edad >= self::LIMITE_EDAD;
    }
}