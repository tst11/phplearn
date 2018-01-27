<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Joke List</title>
</head>
<body>
  <p>List of jokes: </p>
  <?php foreach($jokes as $joke): ?>
    <form action="?deletejoke" method="post">
      <blockquote>
        <p>
        <?php echo $joke['text']; ?>
        </p>
          <input type="hidden" name="id" value="<?php echo $joke['id']; ?>">
          <button type="submit" name="del-btn">X</button>
      </blockquote>
    </form>
  <?php endforeach; ?>
</body>
</html>