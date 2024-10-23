<table class="w-full">
    <tbody>
        <tr>
            <th class="text-left">id</th>
            <th class="text-left">time</th>
            <th class="text-left">employee</th>
            <th class="text-left">position</th>
            <th class="text-left">article</th>
            <th class="text-left">journal</th>
        </tr>
        <?php foreach ($reports as $report) : ?>
            <tr>
                <td><?= $report["id"] ?></td>
                <td><?= $report["report_time"] ?></td>
                <td>
                    <a class="underline text-blue-500" href="employee?id=<?= $report["employee_id"] ?>">
                        <?= $report["employee_name"] ?>
                    </a>
                </td>
                <td><?= $report["position_name"] ?></td>
                <td class="max-w-72"><?= $report["article_name"] ?></td>
                <td>
                    <a class="underline text-blue-500" href="journal?id=<?= $report["journal_id"] ?>">
                        <?= $report["journal_name"] ?>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
