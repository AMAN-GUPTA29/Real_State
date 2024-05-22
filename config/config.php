<?php

try {

    //host
    define("HOSTNAME", "localhost");

    //DBname
    define("DBNAME", "homeland");

    //user
    define("USER", "root");

    //pass
    define("PASS", "");

    $conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
