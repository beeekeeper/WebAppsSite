<?php
$dsn = 'mysql:host=localhost;dbname=b6042054_db2';
$user = 'b6042054';
$password = 'g1nger';
try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo ->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
        echo 'Connection failed again: ' . $e->getMessage();
}
?>