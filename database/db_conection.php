<?php
$host = 'localhost';        // o la IP/URL de tu servidor
$dbname = 'stl_database';  // tu nombre real de la base
$username = 'root';         // usuario (revisa si es root u otro)
$password = '';             // contraseña (vacía si local y no configuraste)

try {
    // Crear instancia PDO para conexión
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Configurar el manejo de errores para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    // En caso de error mostrar mensaje
    die("Error en conexión: " . $e->getMessage());
}
?>
