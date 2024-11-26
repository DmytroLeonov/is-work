<?php
require("utils.php");

$conference_id = validate_id($_GET["id"] ?? null);

if (!$conference_id) {
    require("views/404.php");
    exit;
}

$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $article_id = validate_id($_POST["article_id"] ?? null);
    $report_time = $_POST["report_time"] ?? null;

    if (!$article_id || !$report_time) {
        $error = "All fields are required.";
    }

    if (!$error) {
        $query = "
            INSERT INTO conference_report (conference_id, article_id, report_time)
            VALUES (?, ?, ?)
        ";

        $result = $mysqli->execute_query($query, [$conference_id, $article_id, $report_time]);

        if ($result) {
            header("Location: /conference?id={$conference_id}");
            exit;
        } else {
            $error = "Failed to create the report. Please try again.";
        }
    }
}

$articles = $mysqli->execute_query("SELECT id, name FROM article")->fetch_all(MYSQLI_ASSOC);

require("views/create_conference_report.view.php");
