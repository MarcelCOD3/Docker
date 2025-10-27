<?php
// Conexión para el contenedor Docker
$servername = "database";      // nombre del servicio MariaDB en docker-compose
$username = "root";             // usuario definido en docker-compose
$password = "drafto123";       // contraseña definida en docker-compose
$dbname = "draftosaurus_db";    // nombre de la base de datos definido en docker-compose

/*
 // Conexión para trabajar local (opcional)
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "draftosaurus_db";
*/

try {
    // Crear conexión usando PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // (opcional) mensaje de éxito
    // echo "Conexión exitosa con PDO";
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
