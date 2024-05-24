<?php
include_once("Equipo.php");
include_once("Futbol.php");
include_once("Basquet.php");
class Torneo
{
    private $colPartidos;
    private $premio;

    public function __construct($premio)
    {
        $this->colPartidos = [];
        $this->premio = $premio;
    }
    //
    public function ingresarPartido(Equipo $OBJEquipo1, Equipo $OBJEquipo2, $fecha, $tipoPartido)
    {
        $bandera = false;
        if ($OBJEquipo1->getCantJugadores() == $OBJEquipo2->getCantJugadores() && $OBJEquipo1->getObjCategoria() == $OBJEquipo2->getObjCategoria()) {
            if ($tipoPartido == "basquet") {
                $partido = new Basquet(count($this->colPartidos), $fecha, $OBJEquipo1, 0, $OBJEquipo2, 0);
                array_push($this->colPartidos, $partido);
                $bandera = true;
            }
            if ($tipoPartido == "futbol") {
                $partido = new Futbol(count($this->colPartidos), $fecha, $OBJEquipo1, 0, $OBJEquipo2, 0);
                array_push($this->colPartidos, $partido);
                $bandera = true;
            }
        }
        if ($bandera == false) {
            echo "no se pudo ingresar partido";
        } else {
            echo "partido ingresado";
        }
    }
    public function darGanadores($deporte)
    {
        $ganados = [];
        if ($deporte == "futbol") {
            foreach ($this->colPartidos as $partido) {
                if ($partido instanceof Futbol) {
                    $partido->darEquipoGanador();
                }
            }
        } else {
            foreach ($this->colPartidos as $partido) {
                if ($partido instanceof Basquet) {
                    echo $partido->darEquipoGanador();
                }
            }
        }
    }
}
//ultimo punto casi hecho punto 6