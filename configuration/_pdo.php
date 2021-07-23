<?php

// Using MySQL using the socket
// $db = "mysql:host=localhost;dbname=crudajax;charset=utf8";

// $postgres = "pgsql:host=127.0.0.1;port=5432;dbname=dbname";

$dsn = "mysql:host=localhost;dbname=crudajax;charset=utf8";
$username = 'root';
$password = '';

// To setup DB connection
$conn = new PDO($dsn,$username,$password) OR die("DB not found");
// Setup the PDO if the invalid query is provide
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Let us make a query
$query = "SELECT * FROM users";
$statement = $conn->query($query);

header('Content-Type: application/json');
while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    print json_encode($row);
}

