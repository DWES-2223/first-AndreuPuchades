<?php

namespace ejercicio306;

class Empleado extends \Persona8{
    const SUELDO_PAGAR_IMPUESTOS = 3333;

    private $sueldo;
    private $telefonos;

    public function __construct($sueldo, $telefonos)
    {
        $this->sueldo = $sueldo;
        $this->telefonos = $telefonos;
    }

    public function anyadirTelefono(int $telefono) : void{
        array_push($this->telefonos, $telefono);
    }
    public function listarTelefonos(): string{
        return implode("; ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
    public function debePagarImpuestos(): bool{
        return $this->sueldo > self::SUELDO_PAGAR_IMPUESTOS;
    }

    public static function toHtml(Empleado $emp): string{
        return '<p>Empleado -> '. $emp->getNombreCompleto(). ' | Telefonos -> '. $emp->listarTelefonos(). '</p>';
    }
}