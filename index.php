<?php
interface Ave {
    public function nadar(): bool;
    public function volar(): bool;
}

class Pato implements Ave {

    private $nombre;

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function nadar(): bool{
        return true;
    }

    public function volar(): bool{
        return true;
    }
}

class Condor implements Ave {

    private $nombre;

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function nadar(): bool{
        return false;
;
    }

    public function volar(): bool{
        return true;
    }
}

class Gallina implements Ave {

    private $nombre;

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function nadar(): bool{
        return false;
;
    }

    public function volar(): bool{
        return false;
;
    }
}

class Pinguino implements Ave {

    private $nombre;

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function nadar(): bool{
        return true;
    }

    public function volar(): bool{
        return false;
;
    }
}

function mostrarAvesEnTabla(array $aves): void {
    echo "<table border='1'>";
    echo "<thead><tr><th>Nombre</th><th>Nada</th><th>Vuela</th></tr></thead>";
    echo "<tbody>";
    foreach ($aves as $ave) {
        echo "<tr>";
        echo "<td>" . $ave->getNombre() . "</td>";
        echo "<td>" . ($ave->nadar() ? "si" : "no") . "</td>";
        echo "<td>" . ($ave->volar() ? "si" : "no") . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

$pato = new Pato();
$pato->setNombre("Pato");

$condor = new Condor();
$condor->setNombre("Condor");

$gallina = new Gallina();
$gallina->setNombre("Gallina");

$pinguino = new Pinguino();
$pinguino->setNombre("Pinguino");

$aves = array($pato, $condor, $gallina, $pinguino);

mostrarAvesEnTabla($aves);