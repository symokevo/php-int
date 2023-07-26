<?php

try {
    $pdo = new PDO('mysql: host=localhost;dbname=zimadb', 'zimaster', 'zimaster');
    $output = 'Database Connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connect ot the database server: ' . $e->getMessage();
}

include __DIR__ . '/templates/output.html.php';

