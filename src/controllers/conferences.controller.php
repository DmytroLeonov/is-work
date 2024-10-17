<?php

$query = "
    select
        id,
        name, 
        date,
        (
            select 
                count(*)
            from
                conference_report
            where
                conference_id = c.id
        ) participants,
        case when date > now() then
            'upcoming'
        else
            'finished'
        end status
    from
        conference c
    order by
        case when date > now() then 
            0
        else
            1
        end,
        date asc
";

$conferences = $mysqli->execute_query($query)->fetch_all(MYSQLI_ASSOC);

require("views/conferences.view.php");

