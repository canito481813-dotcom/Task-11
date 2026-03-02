<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM users");
$username = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>