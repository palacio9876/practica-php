<?php

class persona{
    public $nombre;
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre (){
        echo "Hola ".$this->nombre;
    }
    public function mostrarEdad (){
        $this->edad=20;
        return $this->edad;
    }
}

$objAlumno = new persona();
$objALumno->asignarNombre("Cristian");

$objALumno2 = new persona();
$objALumno2->asignarNombre("Jennifer");
$objALumno2->imprimirNombre();

echo $objALumno2->nombre;
echo $objALumno->nombre;
echo $objALumno->mostrarEdad();
?>