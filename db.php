<?php

try {
    $pdo = new PDO('mysql: host=localhost;dbname=zimadb;charset=utf8mb4', 'zimaster', 'zimaster');

    // query the db
    $sql = 'UPDATE joke SET jokedate="2023-7-10" WHERE joketext LIKE "%programmer%"';

    $affectedRows = $pdo->exec($sql);

    $output = 'Updated ' . $affectedRows . ' rows.';
} catch (PDOException $e) {
    $output = 'Database Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    // notice the use of -> to access the properties of an object in php
    // a function stored in an object is called a method
    // Disconnect the server by setting: $pdo = null;
}

include __DIR__ . '/templates/output.html.php';

