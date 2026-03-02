<?php
require 'config.php';

if (isset($_POST['delete'])) {
        $users_id = $_POST['delete'];

$stmt = $pdo->query("DELETE FROM users WHERE users_id = ?");
 $stmt->execute([$users_id]);
}
?>