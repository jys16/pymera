<?php
// Cambia las contraseñas por las que desees hashear
$contrasena1 = "contrasena123";
$contrasena2 = "otracontrasena";

// Generar hashes
$hash1 = password_hash($contrasena1, PASSWORD_DEFAULT);
$hash2 = password_hash($contrasena2, PASSWORD_DEFAULT);

echo "Hash 1: $hash1<br>";
echo "Hash 2: $hash2";
?>