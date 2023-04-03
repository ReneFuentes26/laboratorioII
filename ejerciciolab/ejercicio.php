<?php

// Clase base Ave
class Ave {
  private $nombre;

  function __construct($nombre) {
    $this->nombre = $nombre;
  }

  function nadar() {
    echo  $this->nombre . " puede nadar.<br>";
  }

  function volar() {
    echo $this->nombre . " puede volar.<br>";
  }
  function getNombre(){
    return $this->nombre;
  }
}

// Clase Pato
class Pato extends Ave {
  private $color;

  function __construct($nombre, $color) {
    parent::__construct($nombre);
    $this->color = $color;
  }

    function getColor() {
    return $this->color;
  }
}

// Clase Condor
class Condor extends Ave {
  private $vuelo;

  function __construct($nombre, $vuelo) {
    parent::__construct($nombre);
    $this->vuelo = $vuelo;
  }

  function getVuelo() {
    return $this->vuelo;
  }
}

// Clase Gallina
class Gallina extends Ave {
  private $pollitos;

  function __construct($nombre, $pollitos) {
    parent::__construct($nombre);
    $this->pollitos = $pollitos;
  }

 
  function getPollitos() {
    return $this->pollitos;
  }
}

// Clase Pinguino
class Pinguino extends Ave {
  private $clase;

  function __construct($nombre, $clase) {
    parent::__construct($nombre);
    $this->clase = $clase;
  }

  function getClase() {
    return $this->clase;
  }
}
echo "<h1>Rene Ismael Fuentes Benitez SMIS047221</h1>";
echo "<h1>Hector Alejandro Franco Berrios SMIS092321 </h1>";

//Mandar a imprimir los datos
echo "<h1><p style='color: blue; font-family: Arial;'>Animales usados en el ejercicio.</p></h1>";
echo "<b><li>Pato</li></b>";
echo "<b><li>Cóndor</li></b>";
echo "<b><li>Gallina</li></b>";
echo "<b><li>Pingüino </li></b>";
echo "<br>";

echo "<h2><p style='color:blue; font-family: Arial;'>Uso de las clases segun la asignacion dada</p></h2>";
$pato = new Pato("Lucas", "Negro");
echo "<b>El pato de color " . $pato->getColor() . " está aquí.<br></b>";
$pato->nadar();
$pato->volar();
echo "<br>";

$condor = new Condor("Kirby", 1500);
echo "<b>El condor vuela " . $condor->getVuelo() . " metros de distancia.<br></b>";
$condor->volar();
echo "<br>";

$gallina = new Gallina("Maria", 6);
echo "<b>La gallina " . $gallina->getPollitos() . " a los 3 meses.<br></b>";
$gallina->nadar();
$gallina->volar();
echo "<br>";

$pinguino = new Pinguino("Mario", "Ave no voladora");
echo "<b>El pinguino es una: " . $pinguino->getClase() . ".<br></b>";
$pinguino->nadar();
echo "<br>";
//En el primer enunciado creamos las clases correspondientes a cada animal y la clase Ave la cual nos servira para ser la clase maestra por llamarla de alguna forma
//Luego de crear las clases procedimos a ingresas las caracteristicas a cada clase y usar una funcion __construct para poder heredar el nombre sin problemas a las demas clases
//Cuando creamos las funciones de cada clase decimos comprobar si el procedimiento realizado esta correcto mandando a llamar cada clase con sus respectivas caracteristicas
//Como el nombre, color, distancia de vuelo, pollitos al mes y si el ave puede volar o no.

echo "<h2><p style='color:blue; font-family: Arial;'>Tabla de animales:</p></h2>";
echo "<table border='6'>";
echo "<tr><th>Nombre</th><th>Puede nadar</th><th>Puede volar</th></tr>";
echo "<tr><td>" . $pato->getNombre() . "</td><td>✔</td><td>✔</td></tr>";
echo "<tr><td>" . $condor->getNombre() . "</td><td>-</td><td>✔</td></tr>";
echo "<tr><td>" . $gallina->getNombre() . "</td><td>✔</td><td>-</td></tr>";
echo "<tr><td>" . $pinguino->getNombre() . "</td><td>✔</td><td>-</td></tr>";
echo "</table>";
//En el segundo enunciado logramos hacer la tabla de forma correcta usando el codigo PHP que nos permite crear tablas pero en este mismo enunciado no logramos entender muy bien como hacer 
//El registro para mostrar los datos en la tabla asi que los datos que aparecen en la tabla ya estan predefinidos por nosotros como pareja de trabajo.
?>
<style>
  body {
    background-color: #FCD4D4;
  }

</style>