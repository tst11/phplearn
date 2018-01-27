## Chapter 4

* For DELETE, INSERT, and UPDATE queries (which serve to modify stored data), the exec method returns the number of table rows (entries) that were affected by the query.

```php
$affectedRows = $pdo->exec($sql); // returns number of rows
```

* SELECT queries are treated a little differently, as they can retrieve a lot of data

* Using prepared statements, SQL injection vulnerabilities simply aren’t possible!

```php
  $sql = 'INSERT INTO joke SET
          joketext= :joketext,
          jokedate= CURDATE()';
  $s = $pdo->prepare($sql);
  $s->bindValue(':joketext', $_POST['joketext']);
  $s->execute();
```

* Redirect the browser back to our controller after adding the new joke to the database
```php
  header('Location: .');
  exit();
  // other way:
  // $_SERVER['PHP_SELF']
  // but makes url /index.php instead of /
```

## Chapter 5 Relational DB Design

