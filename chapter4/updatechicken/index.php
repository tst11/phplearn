<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'ijdbuser', 'mypassword');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // $sql = 'CREATE TABLE joke (
  //         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  //         joketext TEXT,
  //         jokedate DATE NOT NULL
  //         ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

  $sql = 'UPDATE joke SET jokedate="2012-04-01"
          WHERE joketext LIKE "%chicken%"';
  // $sql = 'INSERT INTO joke SET
  //         joketext = "Why did the chicken cross the road? To get to the other side!",
  //         jokedate = "2015-02-03"';
  $affectedRows = $pdo->exec($sql);
}
catch (PDOException $e)
{
  $output = 'Errror creating joke table: ' . $e->getMessage();
  include 'output.html.php';
  exit();
}

$output = "Updated $affectedRows rows.";
include 'output.html.php';