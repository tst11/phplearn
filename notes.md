## Chapter 4

* For DELETE, INSERT, and UPDATE queries (which serve to modify stored data), the exec method returns the number of table rows (entries) that were affected by the query.

```php
$affectedRows = $pdo->exec($sql); // returns number of rows
```