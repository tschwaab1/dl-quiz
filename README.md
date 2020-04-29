# Welcome to Driving License Quiz Documentation!


## How to use the mysql.class.php

##### Connect to DB
Simply include the mysqli.class.php (located inside the "includes" folder)

```php
<?php
 require_once("mysqli.class.php");
?>
```


##### Fetch record from DB
```php
<?php
$account = $db->query('SELECT * FROM users WHERE uname = ? AND pass = ?', 'test', 'test')->fetchArray();
echo $account['name'];
?>
```

##### Close DB- Connection
```php
<?php
$db->close();
?>
```

