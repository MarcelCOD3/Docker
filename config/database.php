<?php
try {
    $db = new PDO(
        'mysql:host=db;dbname=draftosaurus_db;charset=utf8',
        'root',
        '' // sin contraseña
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
