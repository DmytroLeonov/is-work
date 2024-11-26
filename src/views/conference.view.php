<table class="w-full">
    <div class="flex justify-between mb-3">
        <h1 class="text-xl">Conference <?= htmlspecialchars($id) ?></h1>
        <a class="underline text-blue-500 mr-0 ml-auto" href="/conference-report/create?id=<?= htmlspecialchars($id) ?>">
            Create Report
        </a>
    </div>
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
                <td><?= htmlspecialchars($report["id"]) ?></td>
                <td><?= htmlspecialchars($report["report_time"]) ?></td>
                <td>
                    <a class="underline text-blue-500" href="employee?id=<?= htmlspecialchars($report["employee_id"]) ?>">
                        <?= htmlspecialchars($report["employee_name"]) ?>
                    </a>
                </td>
                <td><?= htmlspecialchars($report["position_name"]) ?></td>
                <td class="max-w-72"><?= htmlspecialchars($report["article_name"]) ?></td>
                <td><?= htmlspecialchars($report["journal_name"]) ?></td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
