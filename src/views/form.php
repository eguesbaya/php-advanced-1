<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your recipe</title>
</head>
<body>

<?php if (!empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>

    </ul>
<?php endif; ?>

<form action="" method="POST">
    <div>
        <label for="title">Title :</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Save recipe</button>
    </div>
</form>
</body>

</html>