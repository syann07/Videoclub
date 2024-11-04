<?php
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";
include_once "Cliente.php";
include_once "Soporte.php";
//instanciamos un par de objetos cliente
$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);
//mostramos el número de cada cliente creado
echo "<br>El identificador del cliente 1 es: " . $cliente1->getNumero();
echo "<br>El identificador del cliente 2 es: " . $cliente2->getNumero();
//instancio algunos soportes
$soporte1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
$soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1,1);
$soporte3 = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
$soporte4 = new Dvd("El Imperio Contraataca", 4, 3, "es,en","16:9");
//alquilo algunos soportes
$cliente1->alquilar($soporte1)->muestraResumen();
$cliente1->alquilar($soporte2)->muestraResumen();
$cliente1->alquilar($soporte3);
//voy a intentar alquilar de nuevo un soporte que ya tiene alquilado
$cliente1->alquilar($soporte1);
//el cliente tiene 3 soportes en alquiler como máximo
//este soporte no lo va a poder alquilar
$cliente1->alquilar($soporte4);
//este soporte no lo tiene alquilado
$cliente1->devolver(4);

//devuelvo un soporte que sí que tiene alquilado
$cliente1->devolver(26);
//alquilo otro soporte
$cliente1->alquilar($soporte4);
//listo los elementos alquilados
$cliente1->listarAlquileres();



//este cliente no tiene alquileres
$cliente1->devolver(23);
echo "<br><br><br>";
$cliente1->listarAlquileres();

echo "Hola! Soy el cliente 2 <br>";
$cliente2->alquilar($soporte4);
$cliente2->listarAlquileres();


?>