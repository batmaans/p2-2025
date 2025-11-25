<?php
require_once "funcoesBD.php";

$con = conectarBD();

$nome = $_POST['Nome'];
$precoNormal = $_POST['PrecoNormal'];
$precoProm = $_POST['PrecoProm'];

$sql = "INSERT INTO bfjogos (Nome, PrecoNormal, PrecoProm) 
        VALUES ('$nome', '$precoNormal', '$precoProm')";

mysqli_query($con, $sql);

mysqli_close($con);

header("Location: index.php");
exit;
?>

