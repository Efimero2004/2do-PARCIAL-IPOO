<?php 
include ("Categoria.php");
class Futbol extends Partido{
    private $Categoria;
    public function __construct($idpartido, $fecha,Equipo $objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2)
    {
        parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
        $this->Categoria=$objEquipo1->getObjCategoria()->getDescripcion();
    }
    
    public function coeficientePartidoFutbol()
    { 
        
       $coef = parent::coeficientePartido("futbol",null,$this->getCategoria());
       
    }

    public function getCategoria(){
        return $this->Categoria;
    }
    public function __toString()
    {

        return $cadena = parent::__toString();
        $cadena .= " Categoria:" . $this->getCategoria();
    }

}