<table class="w-full">
    <tbody>
        <tr>
            <th class="text-left">id</th>
            <th class="text-left">name</th>
            <th class="text-left">participants</th>
            <th class="text-left">date</th>
            <th class="text-left">status</th>
        </tr>
        <?php foreach ($conferences as $conference) : ?>
            <tr>
                <td><?= htmlspecialchars($conference["id"]) ?></td>
                <td>
                    <a
                        class="underline text-blue-500"
                        href="conference?id=<?= htmlspecialchars($conference["id"]) ?>">
                        <?= htmlspecialchars($conference["name"]) ?>
                    </a>
                </td>
                <td><?= htmlspecialchars($conference["participants"]) ?></td>
                <td><?= htmlspecialchars($conference["date"]) ?></td>
                <td><?= htmlspecialchars($conference["status"]) ?></td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
