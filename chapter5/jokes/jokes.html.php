<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jokes</title>
</head>
<body>
    <?php foreach ($jokes as $joke): ?>
        <form action="?deletejoke" method="post">
            <blockquote>
                <p>
                    <?php echo htmlspecialchars($joke['text'], ENT_QUOTES, 'UTF-8'); ?>
                    <input type="hidden" name="id" value="<?php echo $joke['id']; ?>">
                    <input type="submit" value="Delete">
                    (by <a href="mailto:<?php echo htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
                </p>
            </blockquote>
        </form>
    <?php endforeach; ?>
</body>
</html>