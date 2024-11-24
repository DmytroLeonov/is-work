<table class="w-full">
    <div class="flex items-center gap-4 mb-4">
        <h1 class="text-xl">Employee: <?= htmlspecialchars($employee["id"]) ?></h1>
        <a
            class="underline text-blue-500"
            href="/employee/update?id=<?= htmlspecialchars($employee["id"]) ?>">Edit</a>
    </div>
    <div class="grid grid-cols-2 gap-4 max-w-md border border-gray-200 p-4">
        <p class="font-bold">id</p>
        <p><?= htmlspecialchars($employee["id"]) ?></p>

        <p class="font-bold">Name</p>
        <p><?= htmlspecialchars($employee["name"]) ?></p>

        <p class="font-bold">Institution</p>
        <p><?= htmlspecialchars($employee["institution"]) ?></p>

        <p class="font-bold">Speciality</p>
        <p><?= htmlspecialchars($employee["speciality_name"]) ?></p>

        <p class="font-bold">Position</p>
        <p><?= htmlspecialchars($employee["position_name"]) ?></p>
    </div>

    <h1 class="text-xl my-4">Articles:</h1>
    <tbody>
        <tr>
            <th class="text-left">id</th>
            <th class="text-left">name</th>
            <th class="text-left">journal</th>
            <th class="text-left">year</th>
            <th class="text-left">issue</th>
        </tr>
        <?php foreach ($articles as $article) : ?>
            <tr>
                <td><?= htmlspecialchars($article["id"]) ?></td>
                <td><?= htmlspecialchars($article["name"]) ?></td>
                <td><?= htmlspecialchars($article["journal"]) ?></td>
                <td><?= htmlspecialchars($article["year"]) ?></td>
                <td><?= htmlspecialchars($article["issue"]) ?></td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
