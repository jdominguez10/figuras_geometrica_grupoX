<?php
// Clase abstracta FiguraGeometrica (ya definida previamente)
abstract class FiguraGeometrica {
    protected $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    abstract public function area(): float;
    abstract public function perimetro(): float;
}
