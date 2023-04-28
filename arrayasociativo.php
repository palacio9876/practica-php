<?php
$frutas = array("p"=>"pera", "m"=>"manzana", "b"=>"banano", "f"=>"fresa", "m"=>"melon");
print_r($frutas);
// echo $frutas["b"];

foreach($frutas as $indice=>&$valor){
    echo "<br> El valor: ".$valor." tiene el indice: ".$indice;

}

?>