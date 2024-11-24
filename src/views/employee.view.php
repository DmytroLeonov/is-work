<table class="w-full">
    <div class="flex items-center gap-4 mb-4">
        <h1 class="text-xl">Employee: <?= $employee["id"] ?></h1>
        <a 
            class="underline text-blue-500"
            href="/employee/update?id=<?= $employee["id"] ?>">Edit</a>
    </div>
    <div class="grid grid-cols-2 gap-4 max-w-md border border-gray-200 p-4">
        <p class="font-bold">id</p>
        <p><?= $employee["id"] ?></p>

        <p class="font-bold">Name</p>
        <p><?= $employee["name"] ?></p>

        <p class="font-bold">Institution</p>
        <p><?= $employee["institution"] ?></p>

        <p class="font-bold">Speciality</p>
        <p><?= $employee["speciality_name"] ?></p>

        <p class="font-bold">Position</p>
        <p><?= $employee["position_name"] ?></p>
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
                <td><?= $article["id"] ?></td>
                <td><?= $article["name"] ?></td>
                <td><?= $article["journal"] ?></td>
                <td><?= $article["year"] ?></td>
                <td><?= $article["issue"] ?></td>
            </tr>
        <?php endforeach ?>
        </tr>
    </tbody>
</table>
