<?php
function conectarBD() {
    $con = mysqli_connect("localhost", "root", "", "bf");
    if (!$con) {
        die("Erro ao conectar: " . mysqli_connect_error());
    }
    return $con;
}
?>

