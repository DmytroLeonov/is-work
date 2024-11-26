<?php
$env = parse_ini_file("src" . DIRECTORY_SEPARATOR . ".env");

$server_name = $env["DB_SERVERNAME"];
$db_user = $env["DB_USER"];
$db_password = $env["DB_PASSWORD"];
$db_name = $env["DB_NAME"];

$conn = new mysqli($server_name, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$migrationDir = __DIR__ . DIRECTORY_SEPARATOR . "migrations";

$migrationFiles = glob($migrationDir . DIRECTORY_SEPARATOR . "*.sql");

foreach ($migrationFiles as $file) {
    $sql = file_get_contents($file);

    if ($conn->multi_query($sql)) {
        do {
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->more_results() && $conn->next_result());

        echo "Executed migration: " . basename($file) . "\n";
    } else {
        echo "Error executing migration " . basename($file) . ": " . $conn->error . "\n";
    }
}

$conn->close();
