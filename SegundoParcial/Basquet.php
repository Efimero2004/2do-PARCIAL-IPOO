<?php
class Basquet extends Partido{
    private $infracciones;
public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2)
{
    parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
    $this->infracciones=0;
}
public function coeficientePartidoBasquet()
    {
        parent::coeficientePartido("basquet",$this->infracciones,null);
    }

    public function __toString()
    {

        return $cadena = parent::__toString();
        $cadena .= " Infracciones:" . $this->infracciones;
    }
}