<?php
$offset = $argv[0]; // beware, no input validation!
$query  = "SELECT id, ".$_POST['field']." FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
$result = pg_query($conn, $query);

$query  = "SELECT * FROM products WHERE id LIKE '%$prod%'";
$result = mssql_query($query);