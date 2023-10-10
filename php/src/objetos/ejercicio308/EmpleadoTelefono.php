<?php
namespace ejercicio308;

use ejercicio301\Persona;
use ejercicio306\Empleado;

class EmpleadoTelefono extends Empleado{


    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            return (Empleado::toHtml($p));
        }

        return (Persona::toHtml($p));
    }
}