<?php
$env = parse_ini_file(".env");
$server_name = $env["DB_SERVERNAME"];
$db_user = $env["DB_USER"];
$db_password = $env["DB_PASSWORD"];
$db_name = $env["DB_NAME"];

$mysqli = new mysqli($server_name, $db_user, $db_password, $db_name);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
