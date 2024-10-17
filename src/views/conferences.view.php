<table class="w-full">
    <tbody>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>participants</th>
            <th>date</th>
            <th>status</th>
        </tr>
        <?php foreach ($conferences as $conference) : ?>
            <tr>
                <td class="text-center"><?= $conference["id"] ?></td>
                <td class="text-center"><?= $conference["name"] ?></td>
                <td class="text-center"><?= $conference["participants"] ?></td>
                <td class="text-center"><?= $conference["date"] ?></td>
                <td class="text-center"><?= $conference["status"] ?></td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
