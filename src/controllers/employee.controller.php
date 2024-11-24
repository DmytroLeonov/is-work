<?php
require("utils.php");

$id = validate_id($_GET["id"] ?? null);

if (!$id) {
    return require("views/404.php");
}

$employee_query = "
    select
        e.id,
        e.name,
        i.name institution,
        s.name speciality_name,
        p.name position_name 
    from
        employee e
    join
        institution i on i.id = e.institution_id
    join
        speciality s on s.id = e.speciality_id
    join
        position p on p.id = e.position_id 
    where
        e.id = ?
";
$employee = $mysqli->execute_query($employee_query, [$id])->fetch_assoc();

if (!$employee) {
    return require("views/404.php");
}

$articles_query = "
    select
        a.id,
        a.name,
        ji.year,
        ji.issue,
        j.name journal
    from
        article a
    join
        journal_issue ji on ji.id = a.journal_issue_id
    join
        journal j on j.id = ji.journal_id
    where
        a.employee_id = ?
    order by
        ji.year desc,
        ji.issue desc
";
$articles = $mysqli->execute_query($articles_query, [$id])->fetch_all(MYSQLI_ASSOC);

require("views/employee.view.php");
