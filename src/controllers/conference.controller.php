<?php
require("utils.php");

$id = validate_id($_GET["id"] ?? null);

if (!$id) {
    return require("views/404.php");
}

$query = "
    select
        cr.id,
        cr.report_time,
        a.employee_id,
        e.name employee_name,
        p.name position_name,
        a.name article_name,
        ji.journal_id,
        j.name journal_name
    from
        conference_report cr
    join
        article a on a.id = cr.article_id
    join
        employee e on e.id = a.employee_id 
    join
        position p on p.id = e.position_id
    join
        journal_issue ji on ji.id = a.journal_issue_id
    join
        journal j on j.id = ji.journal_id
    where
        cr.conference_id = ?
    order by
        cr.report_time asc
";

$reports = $mysqli->execute_query($query, [$id])->fetch_all(MYSQLI_ASSOC);

require("views/conference.view.php");
