<?php
if (!isset($_POST['firstname'])) {
    include __DIR__ . '/templates/form.html.php';
} else {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    if ($firstName == 'Simon' && $lastName == 'Kevin') {
        $output = 'Welcome, sir!';
    } else {
        $output = 'Welcome to our website!' . 
        htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' . 
        htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
    }

    include __DIR__ . '/templates/welcome.html.php';
}