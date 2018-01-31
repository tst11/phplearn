<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'ijdbuser', 'mypassword');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to database server.';
  include 'error.html.php';
  exit();
}

try
{
    $sql = 'SELECT joke.id, joketext, name, email
            FROM joke INNER JOIN author
            ON authorid = author.id';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching jokes: ' . $e->getMessage();
    include 'error.html.php';
    exit();
}

foreach ($result as $row)
{
    $jokes[] = array(
        'id' => $row['id'],
        'text' => $row['joketext'],
        'name' => $row['name'],
        'email' => $row['email']
    );
}

include 'jokes.html.php';