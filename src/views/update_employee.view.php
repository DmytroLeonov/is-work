<h1 class="text-xl">Update Employee <?= htmlspecialchars($employee["id"]) ?></h1>

<?php if (!empty($errors)) : ?>
    <div class="errors">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li class="text-red-500"><?= htmlspecialchars($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<form action="" method="POST" class="space-y-4">
    <div>
        <label for="name" class="block">Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            class="border p-2 w-full"
            value="<?= htmlspecialchars($employee["name"]) ?>"
            required
        />
    </div>

    <div>
        <label for="position_id" class="block">Position:</label>
        <select id="position_id" name="position_id" class="border p-2 w-full" required>
            <option value="">Select a position</option>
            <?php foreach ($positions as $position) : ?>
                <option
                    value="<?= $position["id"] ?>"
                    <?= $employee["position_id"] == $position["id"] ? "selected" : "" ?>
                >
                    <?= htmlspecialchars($position["name"]) ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <div>
        <label for="speciality_id" class="block">Speciality:</label>
        <select id="speciality_id" name="speciality_id" class="border p-2 w-full" required>
            <option value="">Select a speciality</option>
            <?php foreach ($specialities as $speciality) : ?>
                <option
                    value="<?= $speciality["id"] ?>"
                    <?= $employee["speciality_id"] == $speciality["id"] ? "selected" : "" ?>
                >
                    <?= htmlspecialchars($speciality["name"]) ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <div>
        <label for="institution_id" class="block">Institution:</label>
        <select id="institution_id" name="institution_id" class="border p-2 w-full" required>
            <option value="">Select an institution</option>
            <?php foreach ($institutions as $institution) : ?>
                <option
                    value="<?= $institution["id"] ?>"
                    <?= $employee["institution_id"] == $institution["id"] ? "selected" : "" ?>
                >
                    <?= htmlspecialchars($institution["name"]) ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Update Employee</button>
    </div>
</form>
