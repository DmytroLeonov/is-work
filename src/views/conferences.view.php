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
                <td><?= $conference["id"] ?></td>
                <td>
                    <a
                        class="underline text-blue-500"
                        href="conference?id=<?= $conference["id"] ?>">
                        <?= $conference["name"] ?>
                    </a>
                </td>
                <td><?= $conference["participants"] ?></td>
                <td><?= $conference["date"] ?></td>
                <td><?= $conference["status"] ?></td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
