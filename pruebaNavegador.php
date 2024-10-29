<?php
include_once "Videoclub.php"; // No incluimos nada más
$vc = new Videoclub("Severo 8A");
//voy a incluir unos cuantos soportes de prueba
$vc->incluirJuego("God of War", 1, 19.99, "PS4", 1, 1);
$vc->incluirJuego("The Last of Us Part II", 2, 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 3, 4.5, "es","16:9");
$vc->incluirDvd("Origen", 4, 4.5, "es,en,fr", "16:9");
$vc->incluirDvd("El Imperio Contraataca", 5, 3, "es,en","16:9");
$vc->incluirCintaVideo("Los cazafantasmas", 6, 3.5, 107);
$vc->incluirCintaVideo("El nombre de la Rosa", 7, 1.5, 140);
//listo los productos
$vc->listarProductos();
echo "<br><br>";
//voy a crear algunos socios
$vc->incluirSocio("Amancio Ortega", 1, 2);
$vc->incluirSocio("Pablo Picasso", 2);
$vc->alquilaSocioProducto(1,2);echo "<br><br>";
$vc->alquilaSocioProducto(1,3);echo "<br><br>";
//alquilo otra vez el soporte 2 al socio 1.
// no debe dejarme porque ya lo tiene alquilado
$vc->alquilaSocioProducto(1,2);echo "<br><br>";
//alquilo el soporte 6 al socio 1.
//no se puede porque el socio 1 tiene 2 alquileres como máximo
$vc->alquilaSocioProducto(1,6);echo "<br><br>";
//listo los socios
$vc->listarSocios();echo "<br><br>";
?>