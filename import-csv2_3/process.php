<?php

//process.php

$connect = new PDO("mysql:host=localhost; dbname=test", "root", "12345678");

$query = "SELECT * FROM list_ongoing_all_end0863_963";

$statement = $connect->prepare($query);

$statement->execute();

echo $statement->rowCount();

?>