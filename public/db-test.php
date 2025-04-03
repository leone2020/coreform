<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Test Connessione Database</h1>";

// Recupera le credenziali dal file .env
$envFile = file_get_contents('../.env');
preg_match('/DB_HOST=(.*)/', $envFile, $hostMatches);
preg_match('/DB_DATABASE=(.*)/', $envFile, $databaseMatches);
preg_match('/DB_USERNAME=(.*)/', $envFile, $usernameMatches);
preg_match('/DB_PASSWORD=(.*)/', $envFile, $passwordMatches);

$host = trim($hostMatches[1] ?? '127.0.0.1');
$database = trim($databaseMatches[1] ?? 'coreform');
$username = trim($usernameMatches[1] ?? 'laracore');
$password = trim($passwordMatches[1] ?? '');

echo "<p>Host: $host</p>";
echo "<p>Database: $database</p>";
echo "<p>Username: $username</p>";
echo "<p>Password: " . str_repeat('*', strlen($password)) . "</p>";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:green;font-weight:bold'>Connessione al database riuscita!</p>";
    
    // Verifica se ci sono tabelle
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    if (count($tables) > 0) {
        echo "<p>Tabelle trovate nel database:</p>";
        echo "<ul>";
        foreach ($tables as $table) {
            echo "<li>$table</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nessuna tabella trovata nel database.</p>";
    }
    
} catch (PDOException $e) {
    echo "<p style='color:red;font-weight:bold'>Errore di connessione: " . $e->getMessage() . "</p>";
}
?>