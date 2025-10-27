<?php
try {
    $db = new PDO(
        'mysql:host=database;dbname=draftosaurus_db;charset=utf8', // nombre del servicio correcto
        'root',        // usuario de Docker
        'drafto123'    // contraseña de Docker
    );

    // Establecer modo de error a excepción
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // (opcional) mensaje de éxito
    // echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
