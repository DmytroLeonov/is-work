        cr.id,
        cr.time,
        e.name employee_name,
        p.name position_name,
        a.name article_name,
        j.name journal_name
<table class="w-full">
    <tbody>
        <tr>
            <th>id</th>
            <th>time</th>
            <th>employee</th>
            <th>position</th>
            <th>article</th>
            <th>journal</th>
        </tr>
        <?php foreach ($report as $reports) : ?>
            <tr>
                <td class="text-center"><?= $report["id"] ?></td>
                <td class="text-center"><?= $report["time"] ?></td>
                <td class="text-center"><?= $report["employee_name"] ?></td>
                <td class="text-center"><?= $report["position_name"] ?></td>
                <td class="text-center"><?= $report["article_name"] ?></td>
                <td class="text-center"><?= $report["journal_name"] ?></td>
                <td class="text-center">
                    <a class="underline text-blue-500" href="?report_id=<?= $report["id"] ?>">
                        info
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
