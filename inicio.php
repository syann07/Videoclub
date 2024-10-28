<?php
    include "Soporte.php";
    $soporte1 = new Soporte("Tenet", 22, 3);
    echo "<strong>" . $soporte1->titulo . "</strong>";
    echo "<br>Precio: " . $soporte1->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros";
    $soporte1->muestraResumen();
?>