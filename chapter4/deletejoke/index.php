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
  $sql = 'SELECT id, joketext FROM joke';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Unable to list jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

if(isset($_GET['deletejoke']))
{
  try
  {
    $sql = 'DELETE FROM joke WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Unable to delete joke: ' . 'sql = ' . $sql . ', message: '. $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

// foreach ($result as $joke)
// {
//   //var_dump($joke);
//   //$jokes[] = $joke;
//   //$jokes[] = array('id' =>)
// }

while ($row = $result->fetch())
{
  $jokes[] = array('id' => $row['id'], 'text' => $row['joketext']);
}

include 'jokes.html.php';