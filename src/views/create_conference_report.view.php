<h1 class="text-xl">Create New Conference Report</h1>

<?php if (isset($error)) : ?>
    <p class="text-red-500"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST" class="space-y-4">
    <div>
        <label for="article_id" class="block">Article:</label>
        <select id="article_id" name="article_id" class="border p-2 w-full" required>
            <option value="">Select an article</option>
            <?php foreach ($articles as $article) : ?>
                <option value="<?= htmlspecialchars($article['id']) ?>">
                    <?= htmlspecialchars($article['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label for="report_time" class="block">Report Time:</label>
        <input type="datetime-local" id="report_time" name="report_time" class="border p-2 w-full" required>
    </div>

    <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Create Report</button>
    </div>
</form>
