<?php
require("utils.php");

$id = validate_id($_GET["id"] ?? null);

if (!$id) {
    return require("views/404.php");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? '');
    $position_id = validate_id($_POST["position_id"] ?? null);
    $speciality_id = validate_id($_POST["speciality_id"] ?? null);
    $institution_id = validate_id($_POST["institution_id"] ?? null);

    $errors = [];

    if (!$name) {
        $errors[] = "Name is required.";
    }

    if (!$position_id || !$speciality_id || !$institution_id) {
        $errors[] = "All dropdown selections are required.";
    }

    if (empty($errors)) {
        $updateQuery = "
            UPDATE employee
            SET name = ?, position_id = ?, speciality_id = ?, institution_id = ?
            WHERE id = ?
        ";

        $result = $mysqli->execute_query($updateQuery, [$name, $position_id, $speciality_id, $institution_id, $id]);

        if ($result) {
            header("Location: /employee?id=$id");
            exit;
        }

        $errors[] = "Failed to update the employee. Please try again.";
    }
}

$employeeQuery = "SELECT * FROM employee WHERE id = ?";
$employee = $mysqli->execute_query($employeeQuery, [$id])->fetch_assoc();

if (!$employee) {
    return require("views/404.php");
}

$positions = $mysqli->query("SELECT id, name FROM position")->fetch_all(MYSQLI_ASSOC);
$specialities = $mysqli->query("SELECT id, name FROM speciality")->fetch_all(MYSQLI_ASSOC);
$institutions = $mysqli->query("SELECT id, name FROM institution")->fetch_all(MYSQLI_ASSOC);

require("views/update_employee.view.php");
